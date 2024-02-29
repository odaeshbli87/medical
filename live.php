<?php
include('DBConnect.php');

if(isset($_POST['search'])){
    $searchTerm=$_POST['search'];
    

    $query = "SELECT FullName , MotherName , Age FROM patients WHERE FullName LIKE '%{$searchTerm}%' LIMIT 5";
    $result = mysqli_query($conn, $query);

    if($result) {
        while($row = mysqli_fetch_assoc($result)){
            echo '<option value="' . $row['FullName'] . ' - ' . $row['MotherName'] . ' - ' . $row['Age'] . '">';
        }
    }else {
        echo 'خطأ في تنفيذ الاستعلام: ' . mysqli_error($conn);
    }
}

include('footer.php');?>