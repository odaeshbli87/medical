<?php  ob_start(); ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>البركة الطبي</title>
    
    <!-- رمز الصفحة -->
    <link rel="icon" href="images/albaraka-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/albaraka-logo.png" type="image/x-icon">

    <!-- تحميل الخطوط -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;400;700&display=swap" rel="stylesheet">

    <!-- رموز الأيقونات -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- ستايل مكتبة الداتا بيكير-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- تحميل jQuery و jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <!-- تحميل ملف التاريخ باللغة العربية -->
    <script src="js/datepicker-ar-DZ.js"></script>

    <!-- tinymce محرر  -->
    <script src="js/tinymceEditor/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea',
        plugins: [
            "noneditable",
            'paste textpattern image',
            'table'
        ]
      });
    </script>

    <!-- تحميل Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    
    <!-- تحميل مكتبة html2pdf-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    
    <!--يتحميل ملف الأنماط الخاص بي -->
    <link href="style.css" rel="stylesheet">
</head>
<body>

    
