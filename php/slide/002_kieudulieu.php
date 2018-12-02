<?php
    // số nguyên
    $int = 5;
    // số thực
    $float = 3.4;
    //chuỗi
    $string = 'phung thi hao';
    //boolean
    $boolean1 = true;
    $boolean2 = false;
    // dạng mảng
    $array_string = array(
        'nguyen van a',
        'nguyen van b',
        'nguyen van c'
    );

    $array_age = array(
        21,23, 15
    );
    //dạng mảng chứa các phần tử hỗn hợp
    //mảng chứa các phần tử phân tách nhau bằng ,
    $array_misc = array('nguyen van a', 'nguyen van b','nguyen van c', 23, 45, 67);
    // php object
    class student {
        //khai báo các thuộc tính
        public $name;
        public $age;
        public $location;
        //hàm khởi tạo của class
        public  function construct($name, $age, $location) {
            $this ->name = $name;
            $this ->age= $age;
            $this ->location= $location;

        }
    }
    //khởi tạo 1 đối tượng đến php
    $a = new student('a', 21, 'ha noi');
    $b = new student('b', 21, 'ha noi');

    //NULL
    $null = NULL;
    //Resource
    echo $int;
    echo "<br>";
    echo $float;
    echo "<br>";
    echo $string;
    echo "<br>";
    //in ra bằng print_r
    echo "in ra bằng print_r";
    echo print_r($int, true);
    echo "<br>";
    echo print_r($float, true);
    echo "<br>";
    echo print_r($string, true);
    echo "<br>";
    echo print_r($array_misc);
    echo "<br>";
    echo print_r($a);
    //in ra mảng
    echo "<pre>";
    print_r($array_misc);
    echo "</pre>";

    echo "<pre>";
    print_r($a);
    echo "</pre>";

    //lệnh debug lỗi
    echo '<br> var_dump()';
    var_dump($int);
    echo '<br> var_dump()';
    var_dump($float);
    echo '<br> var_dump()';
    var_dump($array_misc);
    die();
    exit();



