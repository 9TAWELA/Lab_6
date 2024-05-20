<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php  
        $name = "Mustafa magdi hassin"; 
        $matricNumber = "Bi210055";
        $course = "BIT";
        $yearOfStudy = "20232024/2"; 
        $address = "Taman universiti jalan 20, parit raja, johor, malaysia";
    ?>
    <table border="1"> <!-- Added border for better visibility -->
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
