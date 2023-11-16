<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Foreach Loop</title>
</head>
<body>

<?php
$colors = array("Red", "Green", "Blue");

foreach ($colors as $index => $color) {
    echo "Color " . ($index + 1) . ": $color<br>";
}
?>

</body>
</html>
