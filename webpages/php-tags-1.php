<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use PHP Tags Exercise</title>
</head>

<body>
    <!-- Add PHP tags and create an echo statement that writes "Hello World!" to the screen -->
<?php
    echo "Hello World!";
    $test = "<br> Testing one, two, testing one, two.";
    echo $test;
    $numOne = 5;
    $numTwo = 7;
    echo "<br>The sum of " . $numOne . " and " . $numTwo . " is " . ($numOne + $numTwo) . "!";
    echo "<br>The product of " . $numOne . " and " . $numTwo . " is " . ($numOne * $numTwo) . "!";
?>
</body>

</html>