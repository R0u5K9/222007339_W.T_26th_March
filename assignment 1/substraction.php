<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>substraction</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $Fname = $_POST['Fname'];
      $Lname = $_POST['Lname'];
      $fullname=$Fname."".$Lname;
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $substraction=$num1 - $num2;
    echo"Hello $fullname the substraction of two numbers is $substraction</br>";
    }
    ?>
</body>
</html>