<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فاتورة المريض</title>
    <style>
        @page {
            size: 80mm 60mm;
            margin: 0;
        }
        body {
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .large-number {
            font-size: 36px;
            font-weight: bold;
        }
        .footer {
            position: absolute;
            bottom: 5mm;
            width: 100%;
            text-align: center;
        }
        .footer-left {
            padding: 5mm;
            float: left;
        }
        .footer-right {
            padding: 5mm;
            float: right;
        }
    </style>
</head>
<body>
    <div class="header">مركز البركة الطبي</div>
    <div class="large-number">دور: 21</div>
    <div class="footer">
        <div class="footer-left">رقم الملف الطبي: 1234</div>
        <div class="footer-right">تاريخ: 28/10/2023</div>
    </div>
</body>
</html>