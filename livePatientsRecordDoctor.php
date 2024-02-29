<?php
include('DBConnect.php');
if (isset($_POST['selectDoctor'], $_POST['selectDate'])) {
    $selectDoctor = $_POST['selectDoctor'];
    $selectDate = $_POST['selectDate'];
    $query = "SELECT medicalrecords.*,DrFullName AS DoctorName, 
    ClinicName AS ClinicName, FullName AS PatientName ,MotherName ,Age ,DateOfBirth ,Gender 
    ,Address ,PhoneNumber ,PatientRegistrationDate
    FROM medicalrecords
    JOIN doctors ON medicalrecords.DoctorID = doctors.DoctorID
    JOIN clinics ON medicalrecords.ClinicID = clinics.ClinicID
    JOIN patients ON medicalrecords.PatientID = patients.PatientID
    
    WHERE doctors.DoctorID = '$selectDoctor' AND DATE(DateToday)='$selectDate'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <th scope="row">
                    <?php echo $row['PatientID']; ?>
                </th>
                <td>
                    <?php echo $row['DateToday']; ?>
                </td>
                <td>1</td>
                <td>
                    <?php echo $row['PatientName']; ?>
                </td>
                <td>
                    <?php echo $row['MotherName']; ?>
                </td>
                <td title="<?php echo $row['Age']; ?>">
                    <?php echo $row['DateOfBirth']; ?>
                </td>
                <td>
                    <?php echo $row['Age']; ?>
                </td>
                <td>
                    <?php echo $row['Gender']; ?>
                </td>
                <td>
                    <?php echo $row['ClinicName']; ?>
                </td>
                <td>
                    <?php echo $row['DoctorName']; ?>
                </td>
                <td>
                    <?php echo $row['Address']; ?>
                </td>
                <td><a href="tel:<?php echo $row['PhoneNumber']; ?>">
                        <?php echo $row['PhoneNumber']; ?>
                    </a></td>
                <td><a class="fa-brands fa-whatsapp" target="_blank"
                        href="https://api.whatsapp.com/send/?phone=<?php echo $row['PhoneNumber']; ?>"></a></td>
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
