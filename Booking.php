<?php
    include('header.php');?>

<div class="container p-5">
        <h3 class="h3 p-3 center">حجز موعد لدى مركز البركة الطبي</h3>
        <hr>
    <form action="patient.php" method="post" enctyp="multipart/form-data" class="w-100">
        <div class="row mx-auto">    
            <div class="mb-3 col-md-3">
                <label for="name" class="form-label">أسم المريض</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="الاسم الثلاثي أو الكامل" required oninvalid="this.setCustomValidity('الرجاء كتابة أسمك الثلاثي')" oninput="this.setCustomValidity('')">
            </div>
            <div class="mb-3 col-md-2">
                <label for="DateOfBirth" class="form-label">المواليد</label>
                <input type="date" class="form-control" name="DateOfBirth" id="DateOfBirth">
            </div>
            <div class="mb-3 col-md-2">
                <label for="gender" class="form-label">الجنس</label>
                <select class="form-select" name="gender" id="gender" required oninvalid="this.setCustomValidity('الرجاء تحديد الجنس')" oninput="this.setCustomValidity('')">
                    <option value="">أختر الجنس</option>
                    <option value="ذكر">ذكر</option>
                    <option value="انثى">انثى</option>
                </select>
            </div>
            <div class="mb-3 col-md-3">
                <label for="clinic" class="form-label">العيادة</label>
                <select class="form-select" name="clinic" id="clinic" required oninvalid="this.setCustomValidity('الرجاء اختيار الإختصاص المطلوب')" oninput="this.setCustomValidity('')">
                    <option value="">أختر العيادة</option>
                    <option value="العامة">العامة</option>
                    <option value="العينية">العينية</option>
                    <option value="الهضمية">الهضمية</option>
                    <option value="غدد">الغدد</option>
                    <option value="صدرية">صدرية</option>
                    <option value="أذن أنف حنجرة">أذن أنف حنجرة</option>
                    <option value="أطفال">أطفال</option>
                    <option value="الجلدية">الجلدية</option>
                    <option value="النسائية">النسائية</option>
                    <option value="الجراحة العامة">الجراحة العامة</option>
                    <option value="المسالك البولية">المسالك البولية</option>
                    <option value="العقم">العقم</option>
                    <option value="العظمية والمفاصل">العظمية والمفاصل</option>
                    <option value="العلاج الفيزيائي(الطبيعي)">العلاج الفيزيائي(الطبيعي)</option>
                    <option value="الأسنان">الأسنان</option>
                    <option value="التحاليل الطبية">التحاليل الطبية</option>
                    <option value="حجامة للرجال">حجامة للرجال</option>
                </select>
            </div>
            <div class="mb-3 col-md-2">
                <label for="days" class="form-label">اليوم</label>
                <select class="form-select" name="days" id="days" required oninvalid="this.setCustomValidity('الرجاء تحديد اليوم')" oninput="this.setCustomValidity('')">
                    <option value="">أختر اليوم</option>
                    <option value="السبت">السبت</option>
                    <option value="الأحد">الأحد</option>
                    <option value="الإثنين">الإثنين</option>
                    <option value="الثلاثاء">الثلاثاء</option>
                    <option value="الأربعاء">الأربعاء</option>
                    <option value="الخميس">الخميس</option>
                </select>
            </div>
            <div class="mb-3 col-md-6">
                <label for="phone" class="form-label">رقم الهاتف</label>
                <input type="tel" class="form-control" name="phone" id="phone" required oninvalid="this.setCustomValidity('الرجاء كتابة رقم هاتف صحيح للإتصال بك عند اي طارء')" oninput="this.setCustomValidity('')">
            </div>
            <div class="mb-3 col-md-6">
                <label for="Note" class="form-label">ملاحظة</label>
                <textarea class="form-control" name="Note" id="Note" placeholder="اذا كان لديك استفسار او ملاحظة او تود ان نتصل بك فنرجوا كتابة ذلك لنا" style="height: 38px;"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-success w-100" name="addBooking">حجز</button>
            </div>
        </div>
    </form>
</div>

<div class="container text-center">
    <h3 >طريقة الحجز</h3>
    <iframe width="350" height="300" src="https://www.youtube.com/embed/iXJY5cZRddI?si=9hiQQ662bZrDjAc1" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        allowfullscreen>
    </iframe>
</div>

<div class="container mt-5">
    <h1 class="text-center mb-4">جدول أوقات الدوام للأطباء</h1>

    <table class="table table-hover table-striped table-responsive table-bordered text-center">
        <thead class="thead-light">
            <tr>
                <th scope="col">اليوم</th>
                <th scope="col">العيادة</th>
                <th scope="col">الساعات</th>
                <th scope="col">اسم الطبيب</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="2">السبت</td>
                <td>العيادة العامة</td>
                <td>9:00 صباحًا - 5:00 مساءً</td>
                <td>دكتور أحمد</td>
            </tr>
            <tr>
                <td>عيادة الأطفال</td>
                <td>10:00 صباحًا - 6:00 مساءً</td>
                <td>دكتورة ليلى</td>
            </tr>
            <!-- وهكذا لباقي الأيام والعيادات -->
        </tbody>
    </table>
</div>

<?php 
    if(isset($_POST['addBooking'])){
        $fullname = $_POST['name'];
        $Birth = $_POST['DateOfBirth'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $insert = "INSERT INTO patients (FullName , DateOfBirth , Age , Gender , Address ,PhoneNumber) 
                                VALUES ('$fullname' ,'$Birth','$age' ,'$gender','$address','$phone')";
       if(mysqli_query($conn , $insert)){
            header('location: patient.php');
       }else{
        echo 'لم يتم اضافة السجل';
       }
    }
?>

<?php
    include('footer.php');?>

