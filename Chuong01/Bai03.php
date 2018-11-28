<?php
    $x = 9;
  // $y = $x +2;
   // echo "y=".$y;
    echo"<br>";
    $z= $x%2;
    echo "z=".$z;
    echo "<br>";
    $t= -$z;
    echo "t=".$t;
    echo "<br>";
    //$x*=5;
    //$x+=5;
    //$x-=5;
    //echo "x=".$x;
    echo "<br>";
    //$y=$x++;
   // echo "y=".$y;
    //Các phép toán so sánh
    $number1=10;
    $number2=12;
    echo ($number2>$number1);
    echo "<br>";
    echo ($number1 <> $number2);
    echo "<br>";
    $number3=12;
    $number4="12";
    echo ($number3==$number4);
    echo "<br>";
    echo ($number3===$number4);
    echo "<br>";
    //toán tử logic
    echo ($number1>1);
    echo "<br>";
    echo ($number1>1 && $number2<1);
    echo !($number1>1 && $number2<1);
    echo "<br>";
    //toán tử điều kiện
    $var = "PHP training";
    $result=(is_string($var)==1)? "Chuỗi":"Không là chuỗi";
    echo $result;
    echo "<br>";
    $n = -10;
    $result1=($n>=0)? "Số dương" : "Số âm";
    echo $result1;
    echo "<br>";
    $result2=($n >0)? "số dương" :(($n<0)?"số âm":"số 0 ");
    echo $result2;





