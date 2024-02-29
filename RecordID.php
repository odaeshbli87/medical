<?php include('header.php'); ?>


<div class="container p-5">
    <h3 class="h3 p-3 center">إضافة التشخيص والعلاج</h3>
    <hr>
    <form method="get" action="DrAddDiagnosisTreatment.php" enctype="multipart/form-data" class="w-100">
        <div class="row mx-auto">
            <div class="mb-3 col-3">
                <label for="PatientRecordID" class="form-label">معرف الملف الطبي للمريض</label>
                <input type="number" class="form-control" name="PatientRecordID" id="PatientRecordID">
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success w-100">احضر الملف الطبي</button>
        </div>
    </form>
</div>

<script>
    // استماع للرسالة
    window.addEventListener('message', function(event) {
        // تحقق من مصدر الرسالة
        if (event.origin !== 'DrAddDiagnosisTreatment.php) return;
        
        // استخدم الرسالة التي تم استقبالها هنا
        alert(event.data);
    });
</script>

<?php include('footer.php'); ?>
