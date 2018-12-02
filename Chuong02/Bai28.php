<?php
//array_diff($array1, $array2) trả về một mảng bao gồm các phần tử tồn tại trong
// mảng $array1 nhưng không tồn tại trong mảng $array2

    $array1 = array("php" => "PHP", "java" => "JAVA","html" => "HTML", "CSS");
    $array2 = array( "PHP", "java" => "JAVA", "Zend");
    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    echo "<pre>";
    print_r($array2);
    echo "</pre>";

    $diff = array_diff($array2, $array1);
    echo "<pre>";
    print_r($diff);
    echo "</pre>";

//array_diff_key($array1, $array2) trả về một mảng bao gồm các phần tử khóa tồn tại trong
// mảng $array1 nhưng không tồn tại trong mảng $array2
    $diff = array_diff_key($array1, $array2);
    echo "<pre>";
    print_r($diff);
    echo "</pre>";
//array_diff_assoc($array1, $array2) trả về một mảng bao gồm các phần tử có khóa và giá trị tồn tại trong
// mảng $array1 nhưng không tồn tại trong mảng $array2
    $diff = array_diff_assoc($array1, $array2);
    echo "<pre>";
    print_r($diff);
    echo "</pre>";
    //array_intersect ($array1, $array2) trả về một mảng bao gồm các phần tử
//giống nhau về giá trị giữa 2 mảng $array1 và $array2
 $intersect = array_intersect($array1, $array2);

    echo "<pre>";
    print_r($intersect);
    echo "</pre>";
//array_intersect_key ($array1, $array2) trả về một mảng bao gồm các phần tử
//giống nhau về khóa  giữa 2 mảng $array1 và $array2
    $intersect = array_intersect_key($array1, $array2);
    echo "<pre>";
    print_r($intersect);
    echo "</pre>";

//array_intersect_assoc ($array1, $array2) trả về một mảng bao gồm các phần tử
//giống nhau về khóa và giá trị giữa 2 mảng $array1 và $array2
    $intersect = array_intersect_assoc($array1, $array2);
    echo "<pre>";
    print_r($intersect);
    echo "</pre>";


