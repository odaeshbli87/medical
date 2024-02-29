<?php
    if(isset($_POST['send'])){
       $name = $_POST['name'];
       $IMAGE = $_FILES['image'];
       $image_location = $_FILES['image']['tmp_name'];
       $image_name = $_FILES['image']['name'];
       $image_up = "images/". $image_name;
       $insert = "INSERT INTO customer (name , image) VALUES ('$name' ,'$image_up')";
       mysqli_query($conn , $insert);
       
       if(move_uploaded_file($image_location,'images/'.$image_name)){
        echo "<script>alert('تم رفع الصورة العلولو');</script>";
       }else{
        echo('لم يتم رفع الصورة العلولو');
       }
       header('location: imageForm.php');
    }

?>