<?php
function calculateArea($length, $width) {
    return $length * $width;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Rectangle Area</title>
</head>
<body>
    <?php
    $length = 15; 
    $width = 10; 
    $area = calculateArea($length, $width);
    echo "<p>The area of a rectangle with length $length and width $width is $area square units.</p>";
    ?>
</body>
</html>
