<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If-Else Statement</title>
</head>
<body>

<?php
$grade = 75;

if ($grade >= 90) {
    echo "A";
} elseif ($grade >= 80) {
    echo "B";
} elseif ($grade >= 70) {
    echo "C";
} elseif ($grade >= 60) {
    echo "D";
} else {
    echo "F";
}
?>

</body>
</html>
