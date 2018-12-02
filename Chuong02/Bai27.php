<?php
//current($array) truy xuất phần tử hiện tại của mảng
//end($array) truy xuất phần tử cuối cùng của mảng
//next($array) truy xuất phần tử sau phần tử hiện tại của mảng
//prev($array) truy xuất phần tử trước phàn tử hiện tại của mảng
//reset($array) quay về vị trí phần tử đầu tiên trong mảng
    $course = array("PHP", "Zend", "HTML", "CSS", "JAVA");
    echo "<pre>";
    print_r($course);
    echo "</pre>";

    echo "Current:".current($course)."<br>"; //PHP
    echo "Next:".next($course)."<br>"; //Zend
    echo "Current:".current($course)."<br>"; //Zend
    echo "Next:".next($course)."<br>"; //HTML
    echo "Prev:".prev($course)."<br>"; //Zend
    echo "Reset:".Reset($course)."<br>"; //PHP
    echo "End:".End($course)."<br>"; //JAVA
// serialize($value) chuyển chuỗi/mảng/đối tượng $value thành một chuỗi đặc biệt để lưu vào CSDL
//unserialize($value) chuyển chuỗi đặc biệt dc tạo từ serialize($value) về trạng thái ban đầu
    $number = array("name" => "PHP", "time" => 80, 100, 40);
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    $result = serialize($number);
    echo $result;
    echo "<br>";
    $array = unserialize($result);
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    //sử dụng hàm shuffle để tạo ra mảng mới (mảng liên túc) vói thứ tự các phần tử trong mảng bị thay đổi
    shuffle($number);
    echo "<pre>";
    print_r($number);
    echo "</pre>";

    //sử dụng hàm compact() để tạo ra mảng mới từ các biến có sẵn
    $name = "PHP";
    $time = 100;
    $array = compact("name", "time");
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    //sử dụng hàm range để tạo ra các phần tử mảng
    $array = range(0, 10,2);
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    //tạo mảng sử dụng hàm array_combine($key, $value) để tạo một mảng mới có khóa được lấy từ mảng $key
// và giá trị được lấy từ mảng $value theo tuần tự
    $key = array("name", "time", "total");
    $value = array("PHP", 100, 2000);
    $newArr = array_combine($key, $value);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";