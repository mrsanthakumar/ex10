<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Break Statement</title>
</head>
<body>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break;
    }
    echo $i . "<br>";
}
?>

</body>
</html>
