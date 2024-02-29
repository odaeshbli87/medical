<?php
include('DBConnect.php');

if(isset($_POST['search'])){
    $searchTerm=$_POST['search'];

    $query = "SELECT * FROM patients WHERE FullName LIKE '%{$searchTerm}%' LIMIT 5";
    $result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {?>
            <tr>
                <th scope="row"><?php echo $row['PatientID']; ?></th>
                <td>1</td>
                <td><?php echo $row['FullName']; ?></td>
                <td><?php echo $row['MotherName']; ?></td>
                <td title="<?php echo $row['Age']; ?>"><?php echo $row['DateOfBirth']; ?></td>
                <td><?php echo $row['Age']; ?></td>
                <td><?php echo $row['Gender']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><a href="tel:<?php echo $row['PhoneNumber']; ?>"><?php echo $row['PhoneNumber']; ?></a></td>
                <td><a class="fa-brands fa-whatsapp" target="_blank" href="https://api.whatsapp.com/send/?phone=<?php echo $row['PhoneNumber']; ?>"></a></td>
                <td>
                    <form method="get">
                        <button class="fa-solid fa-print" name="print"></button>
                    </form>
                </td>
                <?php
                if (isset($_GET['print'])) {
                    echo $row['FullName'];
                }
                ?>
            </tr>
        <?php
    }
}
}