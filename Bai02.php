
<?php
$firstName = "Phùng Thị";
$lastName=" Hảo";
$fullName= $firstName.$lastName;
echo $fullName;
echo "<br>";
$number=12;
echo"$number";
echo "<br>";
//var_dump($lastName);
echo gettype($number);
echo "<br>";
echo gettype($lastName);
echo "<br>";
$number1=12.35;
//echo (int)$number1;
settype($number1,"integer");
echo  $number1;
echo "<br>";
echo is_numeric(12);
echo"<br>";
define("PI", 3.14);
echo PI;
echo "<br>";
define("COURSE",3.14);
echo COURSE;
?>
