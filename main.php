<?php
    if(isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
        echo $searchTerm;
    }
?>

    <span>جميع الصفات سوف يتم استدعائها الى هذه الصفحة بحيث يبقى البار ثابت وفقط يتم استدعاء الصفحة من خلال جافا سكربت او بي اتش بي</span>
    <h6 class="text-info"> اضافة صفحة لحساب سعر التحاليل حيث يكون هناك صفحة خاصة في الادمن لتنزيل سعر التحاليل</h6>
    <h6 class="text-danger">اضافة صفحة للخبري بحيث ينزل البيانات تحليل ما  ويتم عملها على شكل بي دي اف </h6>
    <h6 class="text-danger">اضافة بند من صفحة الدكتور للمراجعة المجانية بعد فترة أكثر من 15 يوم مثلا يظهر سليكت بوكس في 30 يوم 60 يوم وهكذا</h6>
 
<?php
    $day = date("l");
    $days = array(
        'Saturday' => 'السبت',
        'Sunday' => 'الأحد',
        'Monday' => 'الإثنين',
        'Tuesday' => 'الثلاثاء',
        'Wednesday' => 'الأربعاء',
        'Thursday' => 'الخميس',
        'Friday' => 'الجمعة'
    );
?>
<div class="container my-5">
    <div class="row">
        <div class="col-6">
            <span><?php echo "اليوم : " . $days[$day] . " " . date('d-m-Y');?></span>
            <h3>اهلا وسهلا محمد</h3>
        </div>
        <div class="col-2">
           <select name="themeMode" id="themeMode" class="form-control  py-2">
                <option>فامق</option>
                <option>أبيض</option>
           </select>
        </div>
    </div>
    <div class="msgbox" id="msgbox">
        <span class="float-end pt-2 show" id="show" onclick="show('content')" style="cursor: pointer;">اظهار</span>
        <div class="content" id="content">
            <h3>مهام اليوم</h3>
            <p>المطلوب اليوم عدة مهام يا محمد أولا لا تنسى اخد موعد لمريض اورهان على العلاج الفيزيائي
                2 لا تنسى النظافة في كل مرة 
                <strong class="text-danger">هذه الرسائل من صاحب العمل</strong>
            </p>
            
            <ul class="list-group">
                <li class="list-group-item">تنظيف المخبر جديد</li>
                <li class="list-group-item">مسح الجدران </li>
                <li class="list-group-item">تغير كرسي الاستقبال</li>
                <li class="list-group-item">الاتصال بالرقم 05395641761  لتصليح الكاميرا</li>
            </ul>
            <span class="float-end pt-2" onclick="hideElement('content')" style="cursor: pointer;">اخفاء</span>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form>
                <input class="form-control py-2" list="patients" id="patinent" placeholder="البحث عن مريض ..." autocomplete="off">
                    <datalist id="patients">
                    
                    </datalist>
            </form>
        </div>
        <div class="col-6">
            <form>
                <input class="form-control  py-2" list="medicalrecords" id="medicalrecord" placeholder="البحث من خلال سجل طبي ...">
                <datalist id="medicalrecords">
                <option value="345666">
                <option value="4567764">
                <option value="44556677">
                <option value="1234567">
                <option value="33445588">
                </datalist>
            </form>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-3">
            <div class="card text-center">
                <a href="addPatient.php" class="text-primary">
                    <div class="card-body">
                    <i class="fa-solid fa-hospital-user fa-xl"></i>
                    <h6 class="mt-3 fw-bold">مريض جديد</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-center">
                <a href="PatientsRecord.php" class="text-success">
                    <div class="card-body">
                    <i class="fa-solid fa-user-group fa-xl"></i>
                    <h6 class="mt-3 fw-bold">المرضى</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-center">
                <a href="#" class="text-danger">
                    <div class="card-body">
                    <i class="fa-solid fa-file-circle-plus fa-xl"></i>
                    <h6 class="mt-3 fw-bold">اضافة سجل مريض</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-center">
                <a href="#" class="text-secondary">
                    <div class="card-body">
                    <i class="fa-solid fa-address-card fa-xl"></i>
                    <h6 class="mt-3 fw-bold">السجلات</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

