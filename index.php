<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Nhap vao do dai mang hai chieu <input type="text" name="length">
    <input type="submit" value="Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $length = $_POST["length"];
    $arr = array();
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length; $j++) {
            $arr[$i][$j] = rand(0, 9);
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }
    $sum = 0;
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length; $j++) {
            if ($i == $j) {
                $sum += $arr[$i][$j];
            }
        }
    }
    echo "<br> Tong cac so o duong cheo la:  " . $sum;
}
?>

</body>
</html>