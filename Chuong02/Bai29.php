<?php
    //hàm array_walk sẽ gửi cá giá trị của mảng đến 1 hàm nào đó để xử lý rồi nhận kq trả về là một mảng mới
    $array = array("name" => "PHP", "time" => 120, "zend", "html");
    foreach ($array as $key => $value) {
        echo $key. ":" .$value."<br>";
    }
    function myFunction ($value, $key, $param) {
        echo $key . $param . $value."<br>";
    }
    array_walk($array, "myFunction", "-");
    // in ra một mảng mới
    $number = array(2, 4, 5, 8, 11);
    function myNumber (&$value, $key, $param = 2) {
        $value = $value * $param;
    }
    array_walk($number, "myNumber", 2);
    echo "<pre>";
    print_r($number);
    echo "</pre>";

    //hàm array_map sẽ gửi cá giá trị của 1 hay nhiều mảng đến 1 hàm nào đó để xử lý rồi nhận kq trả về là một mảng mới
    $number1 = array(2, 4, 5, 8, 11);
    $number2 = array(1, 4, 8, 11, 3);
    /*$newArr = array();
    foreach ($number1 as $key => $value) {
        $newArr[] = ($value % 2 == 0) ? "số chẵn" : "số lẻ";
    }
    echo "<pre>";
    print_r($number1);
    echo "</pre>";
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    */
    function checkNumber($number) {
        $result = ($number % 2 == 0)? "số chẵn" : "số lẻ";
        return $result;
    }
    $newArr = array_map("checkNumber", $number1);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";

    function myFunction1 ($n1, $n2) {
        $result = $n1 * $n2;
        return $result;
    }
    $newArr = array_map("myFunction1", $number1, $number2);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
