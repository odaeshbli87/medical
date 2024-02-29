<?php
    include('header.php');
    include('DBConnect.php');?>

<div class="container p-5">
        <h3 class="h3 p-3 center">إضافة مريض جديد</h3>
        <hr>
    <form method="post" enctyp="multipart/form-data" class="w-100">
        <div class="row mx-auto">    
            <div class="mb-3 col-md-3">
                <label for="name" class="form-label">أسم المريض</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="الاسم الثلاثي أو الكامل" required oninvalid="this.setCustomValidity('الرجاء كتابة أسم المريض الثلاثي')" oninput="this.setCustomValidity('')">
            </div>
            <div class="mb-3 col-md-3">
                <label for="name" class="form-label">أسم الأم</label>
                <input type="text" class="form-control" name="MotherName" id="MotherName" placeholder="أسم الأم" required oninvalid="this.setCustomValidity('الرجاء كتابة أسم الأم')" oninput="this.setCustomValidity('')">
            </div>
            <div class="mb-3 col-md-3">
                <label for="DateOfBirth" class="form-label">المواليد</label>
                <input type="date" class="form-control" name="DateOfBirth" id="DateOfBirth" placeholder="dd-mm-yyyy">
            </div>
            <div class="mb-3 col-md-3">
                <label for="gender" class="form-label">الجنس</label>
                <select class="form-select" name="gender" id="gender" required oninvalid="this.setCustomValidity('الرجاء تحديد الجنس')" oninput="this.setCustomValidity('')">
                    <option value="">أختر الجنس</option>
                    <option value="ذكر">ذكر</option>
                    <option value="انثى">انثى</option>
                </select>
            </div>
            
            <div class="mb-3 col-md-4">
                <label for="phone" class="form-label">رقم الهاتف</label>
                <input type="tel" class="form-control" name="phone" id="phone">
            </div>
            <div class="mb-3 col-md-4">
                <label for="address" class="form-label">العنوان</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="المدينة / الحي / الشارع / البناء / رقم الشقة" style="height: 38px;"></input>
            </div>
            <div class="mb-3 col-md-4">
                <label for="Note" class="form-label">ملاحظة</label>
                <input type="textarea" class="form-control" name="Note" id="Note" placeholder="أكتب اي ملاحظة" style="height: 38px;">
            </div>
            <div class="mb-3">
                <button class="btn btn-success w-100" name="addPatient">إضافة المريض</button>
            </div>
        </div>
    </form>
</div>

<?php 


    if(isset($_POST['addPatient'])){
        // $FullName = $_POST['name'];
        // $MotherName = $_POST['MotherName'];
        // $Birth = $_POST['DateOfBirth'];
        // $gender = $_POST['gender'];
        // $phone = $_POST['phone'];
        // $address = $_POST['address'];
        // $Note = $_POST['Note'];

        $formData = [
        'FullName' => $_POST['name'],
        'MotherName' => $_POST['MotherName'],
        'Birth' => $_POST['DateOfBirth'],
        'gender' => $_POST['gender'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'Note' => $_POST['Note']
    ];
        foreach($formData as $key => $value ){
            $sanitizedData = filter_var($value, FILTER_SANITIZE_STRING);
            $formData[$key] = htmlspecialchars($sanitizedData, ENT_QUOTES, 'UTF-8');
        }

        $today = new DateTime();      // لحساب العمر
        $dob = new DateTime($formData['Birth']);  // لحساب العمر
        $age = $today->diff($dob)->y;  // لحساب العمر
        $month = $today->diff($dob)->m;  // لحساب العمر
        $day = $today->diff($dob)->d;  // لحساب العمر

        $insert = "INSERT INTO patients (FullName, MotherName, DateOfBirth, Age, Month, Day, Gender, Address, PhoneNumber, Note) 
                        VALUES ('$formData[FullName]', '$formData[MotherName]', '$formData[Birth]', '$age', '$month', '$day','$formData[gender]', '$formData[address]', '$formData[phone]', '$formData[Note]')";
       if(mysqli_query($conn , $insert)){
        echo '<script>
        var confirmed = confirm("تم دفع الكشفية. هل ترغب في طباعة الملف الطبي؟");
        if (confirmed) {
            window.location.href = "patient.php?FullName=' . $formData['FullName'] . "&MotherName=" .$formData['MotherName'] .'";
        }
        </script>';
       }else{
        echo 'لم يتم اضافة السجل';
       }
    }
?>

<?php
    include('footer.php');?>

