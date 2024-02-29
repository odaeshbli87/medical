<?php
include('header.php');
include('DBConnect.php');
?>

<div class="container p-5">
    <h3 class="h3 p-3 center">إضافة كشفية</h3>
    <hr>
    <form method="post" enctype="multipart/form-data" class="w-100">
        <div class="row mx-auto">
            <div class="mb-3 col-3">

                <?php
                $uniqid = null;
                do {
                    $patientRecordID = mt_rand(100000, 9999999);
                    $result = mysqli_query($conn, "SELECT COUNT(*) FROM medicalrecords WHERE PatientRecordID = $patientRecordID");
                    $row = mysqli_fetch_array($result);

                    if ($row[0] == 0) {
                        $uniqid = $patientRecordID;
                    }

                } while ($uniqid == null);
                // تقوم هذه الاكواد الى انشاء معرف فريد والتحقق من قاعدة البيانات اذا كان هذا المعرف موجود
                ?>

                <label for="PatientRecordID" class="form-label">معرف الملف الطبي</label>
                <input type="text" class="form-control" name="PatientRecordID" value="<?php echo $uniqid; ?>"
                    id="PatientRecordID" readonly>
            </div>
            <div class="mb-3 col-md-3">
                <label for="clinic" class="form-label">العيادة</label>
                <select class="form-select" name="clinic" id="clinic" required
                    oninvalid="this.setCustomValidity('الرجاء اختيار الإختصاص المطلوب')"
                    oninput="this.setCustomValidity('')">
                    <option value="">أختر العيادة</option>
                    <option value="1">العامة</option>
                    <option value="2">العينية</option>
                    <option value="3">الجلدية</option>
                    <option value="4">النسائية</option>
                    <option value="5">المسالك البولية</option>
                    <option value="6">العظمية والمفاصل</option>
                    <option value="7">العلاج الفيزيائي(الطبيعي)</option>
                    <option value="8">الهضمية</option>
                    <option value="9">الغدد</option>
                    <option value="10">صدرية</option>
                    <option value="11">أذن أنف حنجرة</option>
                    <option value="12">أطفال</option>
                    <option value="13">الجراحة العامة</option>
                    <option value="14">الأسنان</option>
                    <option value="15">التحاليل الطبية</option>
                </select>
            </div>
            <div class="mb-3 col-3">
                <label for="doctor" class="form-label">الطبيب</label>
                <select class="form-select" name="doctor" id="doctor" required
                    oninvalid="this.setCustomValidity('الرجاء اختيار الطبيب')" oninput="this.setCustomValidity('')">
                    <option value="">أختر الطبيب</option>
                    <option value="1">عبد الكريم البني</option>
                    <option value="2">أحمد الحمد</option>
                </select>
            </div>
            <div class="mb-3 col-3">
                <label for="adminNote" class="form-label">ملاحظة الإدارة</label>
                <input type="text" class="form-control" name="adminNote" id="adminNote">
            </div>
            <div class="mb-3">
                <button class="btn btn-success w-100" name="addCheckup">تم الدفع إضافة الكشفية</button>
            </div>
        </div>
    </form>
</div>

<?php
if (isset($_POST['addCheckup'])) {
    $PatientID = $_GET['PatientID'];
    $clinic = $_POST['clinic'];
    $doctor = $_POST['doctor'];
    $adminNote = $_POST['adminNote'];
    $insert = "INSERT INTO medicalrecords (PatientID ,ClinicID ,DoctorID ,AdminNote ,PatientRecordID ) 
                                        VALUES ('$PatientID' ,'$clinic' ,'$doctor','$adminNote','$uniqid')";
    if (mysqli_query($conn, $insert)) {
        $q = "SELECT FullName , MotherName FROM Patients WHERE PatientID = '$PatientID'";
        $result = mysqli_query($conn, $q);
        $row = mysqli_fetch_array($result);
        $FullName = $row['FullName'];
        $MotherName = $row['MotherName'];
        header("Location:patient.php?FullName=$FullName&MotherName=$MotherName");
    } else {
        echo 'لم يتم اضافة السجل';
    }
}
?>

<?php
include('footer.php'); ?>