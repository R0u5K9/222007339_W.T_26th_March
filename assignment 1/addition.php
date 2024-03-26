<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addition</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $Fname = $_POST['Fname'];
      $Lname = $_POST['Lname'];
      $fullname=$Fname."".$Lname;
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $sum=$num1 + $num2;
    echo"Hello $fullname the sum is $sum</br>";
    }
    ?>
</body>
</html>