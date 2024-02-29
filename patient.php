<?php include('header.php');
include('DBConnect.php');
if (isset($_GET['FullName']) && isset($_GET['MotherName'])) {
    $FullName = $_GET['FullName'];
    $MotherName = $_GET['MotherName'];

    $result = mysqli_query($conn, "SELECT * FROM Patients WHERE FullName = '$FullName' and MotherName = '$MotherName'");
    $row = mysqli_fetch_array($result);
    $PatientID = $row['PatientID'];
    ?>

    <div class="container p-1 my-5 bg-white">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="images/businessman.png" class="img-fluid patientImg" alt="صورة المريض">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title fw-bolder">
                                    <?php echo $row['FullName']; ?>
                                </h5>
                                <h6>الأم :
                                    <?php echo $row['MotherName']; ?>
                                </h6>
                                <!-- <h6>المعرف : <? php // echo $row['PatientID']; ?></h6> -->
                                <h6>الجنس :
                                    <?php echo $row['Gender']; ?>
                                </h6>
                                <h6> الميلاد :
                                    <?php echo $row['DateOfBirth']; ?>
                                </h6>
                                <h6> العمر :
                                    <?php echo $row['Age'] . " سنة " . $row['Month'] . " شهر " . $row['Day'] . " يوم "; ?>
                                </h6>
                                <h6> الهاتف : <a href="tel:<?php echo $row['PhoneNumber']; ?>">
                                        <?php echo $row['PhoneNumber']; ?>
                                    </a></h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <table class="float-end">
                    <tr>
                        <td>
                            <div class="management text-center align-middle position-relative">
                                <a href="tel:<?php echo $row['PhoneNumber']; ?>" name="NewCheckup">إتصال مكالمة
                                    <i class="fa-solid fa-phone"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="management text-center align-middle position-relative">
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send/?phone=<?php echo $row['PhoneNumber']; ?>">مراسلة
                                    واتساب
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="management text-center align-middle position-relative">
                                <a href="sms.php" name="Update">أرسال SMS
                                    <i class="fa-solid fa-comment-sms"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="management text-center align-middle position-relative">
                                <a href="SendEmail.php" name="Delete">مراسلة عبر البريد
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3">
                <table class="float-end">
                    <tr>
                        <td>
                            <div class="management text-center align-middle position-relative">
                                <a href="addcheckup.php?PatientID=<?php echo $PatientID; ?>" name="NewCheckup">معاينة جديده
                                    <i class="fa-solid fa-user-doctor"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="management text-center align-middle position-relative">
                                <a href="addcheckup.php" name="ArrangeAppointment">ترتيب موعد
                                    <i class="fa-solid fa-calendar-check"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="management text-center align-middle position-relative">
                                <a href="addcheckup.php" name="Update">تعديل
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="management text-center align-middle position-relative">
                                <a href="addcheckup.php" name="Delete">حذف
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-8">

        </div>
    </div>
    <div class="container p-1 mb-5 bg-white">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">التاريخ الطبي</button>
            <button type="button" class="btn btn-primary">Middle</button>
            <button type="button" class="btn btn-primary">Left</button>
        </div>
    </div>
    <form>
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">معرف السجل الطبي</th>
                    <th scope="col">تاريخ المعاينة</th>
                    <th scope="col">المعاينة منذ</th>
                    <th scope="col">العيادة</th>
                    <th scope="col">الطبيب</th>
                    <th scope="col">ملاحظة الإدارة</th>
                    <th scope="col">معاينة الدكتور</th>
                    <th scope="col">إضافة مراجعة</th>
                    <th scope="col">تعديل</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT medicalrecords.*,DrFullName AS DoctorName, ClinicName AS ClinicName, FullName AS PatientName
                FROM medicalrecords
                JOIN doctors ON medicalrecords.DoctorID = doctors.DoctorID
                JOIN clinics ON medicalrecords.ClinicID = clinics.ClinicID
                JOIN patients ON medicalrecords.PatientID = patients.PatientID
                WHERE patients.PatientID = $PatientID ;
            ");
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $row['PatientRecordID']; ?>
                        </th>
                        <td>
                            <?php echo $row['DateToday']; ?>
                        </td>
                        <?php
                        $dayAgo = $row['DateToday'];
                        $today = new DateTime();
                        $dob = new DateTime($dayAgo);
                        $since = $today->diff($dob)->d; // لحساب الأيام التي مضت على الكشفية
                        ?>
                        <td>
                            <?php echo $since . ' يوم '; ?>
                        </td>
                        <td>
                            <?php echo $row['ClinicName']; ?>
                        </td>
                        <td>
                            <?php echo $row['DoctorName']; ?>
                        </td>
                        <td>
                            <?php echo $row['AdminNote']; ?>
                        </td>
                        
                            <td class="dci"><a href="#" data-bs-toggle="modal" data-bs-target="#Doctor-consultation-info"><i class="fa-solid fa-file-signature"></i></a></td>
                            <td class="add-review" name="add-review"><a href="#"><i class="fa-solid fa-person-walking-arrow-loop-left"></i></a></td>
                            <td class="update"><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td class="delete"><a href="#"><i class="fa-solid fa-trash"></i></a></td>

                            <?php
                               // if (isset($_GET['add-review'])){
                                //    echo '<script>alert();</script>';
//}
                            ?>
                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="DiagnosisTreatmentImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" id="largeImage">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">التفاصيل</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">سجل النشاط</a>
        </li>
    </ul>

    <?php
} else {
    echo '<h1 class="text-center p-5">لا يوجد بيانات</h1>';
}

include('footer.php'); ?>


<!-- Modal -->
<div class="modal fade" id="Doctor-consultation-info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">معلومات معاينة الدكتور للمريض</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
        <th scope="col">التشخيص</th>
        <th scope="col">العلاج أو الوصفة</th>
        <th scope="col">ملاحظة الطبيب</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>
        <?php echo $row['Diagnosis']; ?>
    </td>
    <td>
        <?php echo $row['Prescription']; ?>
    </td>
    <td>
        <?php echo $row['DrNote']; ?>
    </td>
  </tbody>
</table>

    <div class="DiagnosisTreatmentImgDiv">
        <img src="https://img.alwakeelnews.com/Content/Upload/Editor/Image1_11202229132630703456698.png">
    </div>
    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
      </div>
    </div>
  </div>
</div>