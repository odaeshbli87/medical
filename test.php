<?php
// التحقق مما إذا تم إرسال النموذج بواسطة POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // جمع القيم من حقول الإدخال
    $inputValues = $_POST;

    // يمكنك الآن استخدام $inputValues كمصفوفة تحتوي على القيم
    print_r($inputValues);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">

    <input type="submit" value="Submit">
</form>
</body>
</html>
