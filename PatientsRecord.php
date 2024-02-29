<?php include('header.php'); ?>
<?php include('DBConnect.php');
$pageName = "PatientsRecord.php";

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
}
?>

<div class="container">
    <h2 class="text-center p-5">سجل المرضى</h2>
    <div class="row">
        <div class="mb-3 col-3">
            <label for="filterByPatientName" class="form-label">البحث حسب اسم المريض</label>
            <input class="form-control py-2" name="filterByPatientName" list="filterByPatientNames"
                id="filterByPatientName" placeholder="البحث عن مريض ..." autocomplete="off">
            <datalist id="filterByPatientNames">

            </datalist>

        </div>
        <div class="mb-3 col-3 position-relative">
            <label for="datepicker" class="form-label">جلب المرضى حسب التاريخ</label>
            <!-- <input type="date" class="form-control" name="filterByPatientsDate" id="filterByPatientsDate" Value="yyyy/mm/dd"> -->
            <input type="text" class="form-control" name="filterByPatientsDate" id="datepicker" autocomplete="off">
        </div>
        <div class="mb-3 col-3">
            <label for="filterByPatientsClinck" class="form-label">المرضى حسب التاريخ و العيادة</label>
            <select class="form-control" name="filterByPatientsClinck" id="filterByPatientsClinck">
                <option value="">أختر العيادة</option>
                <option value="1">العامة</option>
                <option value="2">العينية</option>
                <option value="3">الجلدية</option>
            </select>
        </div>
        <div class="mb-3 col-3">
            <label for="filterByPatientsDoctor" class="form-label">المرضى حسب التاريخ و الطبيب</label>
            <select class="form-control" name="filterByPatientsDoctor" id="filterByPatientsDoctor">
                <option value="">أختر الطبيب</option>
                <option value="1">عبد الكريم</option>
                <option value="2">أحمد الحمد</option>
                <option value="3">سليم أحمد</option>
            </select>
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">تاريخ التسجيل</th>
            <th scope="col">رقم الدور</th>
            <th scope="col">أسم المريض</th>
            <th scope="col">الأم</th>
            <th scope="col">تاريخ الميلاد</th>
            <th scope="col">العمر</th>
            <th scope="col">الجنس</th>
            <th scope="col">العيادة</th>
            <th scope="col">الطبيب</th>
            <th scope="col">العنوان</th>
            <th scope="col">رقم الهاتف</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody id="todayPatients">

        <?php
        $query = "SELECT medicalrecords.*,DrFullName AS DoctorName, 
                ClinicName AS ClinicName, FullName AS PatientName ,MotherName ,Age ,DateOfBirth ,Gender ,Address ,PhoneNumber ,PatientRegistrationDate
                FROM medicalrecords
                JOIN doctors ON medicalrecords.DoctorID = doctors.DoctorID
                JOIN clinics ON medicalrecords.ClinicID = clinics.ClinicID
                JOIN patients ON medicalrecords.PatientID = patients.PatientID
                
                WHERE DATE(dateToday) = CURDATE()";
        $result = mysqli_query($conn, $query);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row">
                        <?php echo $row['PatientID']; ?>
                    </th>
                    <td>
                        <?php echo $row['DateToday']; ?>
                    </td>
                    <td>1</td>
                    <td>
                        <?php echo $row['PatientName']; ?>
                    </td>
                    <td>
                        <?php echo $row['MotherName']; ?>
                    </td>
                    <td title="<?php echo $row['Age']; ?>">
                        <?php echo $row['DateOfBirth']; ?>
                    </td>
                    <td>
                        <?php echo $row['Age']; ?>
                    </td>
                    <td>
                        <?php echo $row['Gender']; ?>
                    </td>
                    <td>
                        <?php echo $row['ClinicName']; ?>
                    </td>
                    <td>
                        <?php echo $row['DoctorName']; ?>
                    </td>
                    <td>
                        <?php echo $row['Address']; ?>
                    </td>
                    <td><a href="tel:<?php echo $row['PhoneNumber']; ?>">
                            <?php echo $row['PhoneNumber']; ?>
                        </a></td>
                    <td><a class="fa-brands fa-whatsapp" target="_blank"
                            href="https://api.whatsapp.com/send/?phone=<?php echo $row['PhoneNumber']; ?>"></a></td>
                    <td>
                        <form method="get">
                            <button class="fa-solid fa-print" name="print"></button>
                        </form>
                    </td>
                </tr>
                <?php
            }
        }

        ?>

    </tbody>

    <tbody id="PatientsRecord">
        <!-- Data From Ajax -->
    </tbody>

</table>


<?php include('footer.php'); ?>