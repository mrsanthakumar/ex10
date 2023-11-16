<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch Statement</title>
</head>
<body>

<?php
$day = "Wednesday";

switch ($day) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "It's a weekday.";
        break;
    case "Friday":
        echo "It's Friday! Almost the weekend.";
        break;
    default:
        echo "It's the weekend.";
}
?>

</body>
</html>
