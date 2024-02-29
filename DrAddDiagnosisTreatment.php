<?php include('header.php'); ?>

<?php
//$PatientRecordID = $_GET['PatientRecordID'];
//if(($PatientRecordID) && !empty($PatientRecordID)){
    if(isset($_GET['PatientRecordID']) or empty($_GET['PatientRecordID'])){
    $PatientRecordID = $_GET['PatientRecordID'];
    $select ="SELECT COUNT(*) AS RecordCount FROM medicalrecords WHERE PatientRecordID = '$PatientRecordID'";
    $result = mysqli_query($conn,$select);
    $row = mysqli_fetch_array($result);
    if($row['RecordCount']==0){
        header('location:RecordID.php');
    }else{
$result = mysqli_query($conn, "SELECT MedicalRecords.*, Patients.*
    FROM MedicalRecords
    JOIN Patients ON MedicalRecords.PatientID = Patients.PatientID
    WHERE MedicalRecords.PatientRecordID = $PatientRecordID");

$row = mysqli_fetch_array($result);

    }}?>


<div class="container-fluid p-2">
    <div class="row g-0">
        <div class="col-md-2">
        
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/albaraka-logo.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title fw-bolder"><?php echo $row['FullName']; ?></h3>
                            <h6> الميلاد : <?php echo $row['DateOfBirth']; ?></h6>
                            <h6> العمر : <?php echo $row['Age']; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 table-responsive-xxl" style="max-height: 300px; overflow-y: auto;">
            <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">معرف الكشفية</th>
            <th scope="col">تاريخ الكشفية</th>
            <th scope="col">مضى على الكشفية</th>
            <th scope="col">التشخيص</th>
            <th scope="col">العلاج أو الوصفة</th>
            <th scope="col">ملاحظة الطبيب</th>
            <th scope="col">صورة العلاج</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = mysqli_query($conn, "SELECT medicalrecords.*,DrFullName AS DoctorName, ClinicName AS ClinicName, FullName AS PatientName
            FROM medicalrecords
            JOIN doctors ON medicalrecords.DoctorID = doctors.DoctorID
            JOIN clinics ON medicalrecords.ClinicID = clinics.ClinicID
            JOIN patients ON medicalrecords.PatientID = patients.PatientID
            WHERE MedicalRecords.PatientRecordID = $PatientRecordID;
        ");
        while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <th scope="row"><?php echo $row['PatientRecordID']; ?></th>
                <td><?php echo $row['DateToday']; ?></td>
                <?php
                $dayAgo = date('Y-m-d', strtotime($row['DateToday'])); // لجلب التاريخ بدون الساعات والدقائق و الثواني
                $today = new DateTime();
                $dob = new DateTime($dayAgo);
                $since = $today->diff($dob)->d; // لحساب الأيام التي مضت على الكشفية
                ?>
                <td><?php echo $since . ' يوم '; ?></td>
                <td><?php echo $row['Diagnosis']; ?></td>
                <td class="w-25"><?php echo $row['Prescription']; ?></td>
                <td><?php echo $row['DrNote']; ?></td>
                <td> <img src="<?php echo $row['DiagnosisTreatmentImg']; ?>" style="width:100px"></td>
            </tr>
        <?php   } ?>
    </tbody>
</table>


        </div>
    </div>    
    <hr>
    <form method="post" enctype="multipart/form-data" class="w-100">
        <div class="row mx-auto">
            <div class="mb-3 col-4">
                <label for="Diagnosis" class="form-label">التشخيص</label>
                <textarea class="form-control" name="Diagnosis" id="Diagnosis"></textarea>
            </div>
            <div class="mb-3 col-4">
                <label for="treatment" class="form-label">العلاج أو الوصفة</label>
                <textarea class="form-control" name="treatment" id="treatment"></textarea>
            </div>
            <div class="mb-3 col-4">
                <label for="DrNote" class="form-label">ملاحظة الطبيب</label>
                <textarea class="form-control" name="DrNote" id="DrNote"></textarea>
            </div>
            <div class="mb-3">
                <label for="DiagnosisTreatmentImg" class="form-label">صورة للتشخيص والعلاج</label>
                <input class="form-control" type="file" accept=".jpg, .jpeg, .png, .webp, .pdf" name="DiagnosisTreatmentImg" id="DiagnosisTreatmentImg">
            </div>
            <div class="mb-3">
                <button class="btn btn-success w-100" name="addCheckup">إضافة التشخيص والعلاج</button>
            </div>
        </div>
    </form>
</div>

<?php
if (isset($_POST['addCheckup'])) {
    $Diagnosis = $_POST['Diagnosis'];
    $treatment = $_POST['treatment'];
    $DrNote = $_POST['DrNote'];
    $insert = "INSERT INTO medicalrecords (Diagnosis , Prescription ,DiagnosisTreatmentImg ,DrNote) 
                VALUES ('$Diagnosis' ,'$treatment', '$DiagnosisTreatmentImg' ,'$DrNote')";
    if (mysqli_query($conn, $insert)) {
        header('location: patient.php');
    } else {
        echo 'لم يتم اضافة السجل';
    }
}
?>
<?php include('footer.php'); ?>
