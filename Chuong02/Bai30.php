<?php
// array_slice(array, offset, length, preserve) trích xuất lấy một đoạn phần tử của mảng từ vịt trí bắt
// đầu offset (vị trí bắt đầu trong mảng là 0) và lấy length của phần tử
    $array = array("PHP", "a", 1, 5, "HTML");
    $newArr = array_slice( $array, 1, 2);
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    //nếu preserve = true là giữ nguyên key của phần tử ỏ mảng ban đầu, ngc lại  preserve = false key bắt đầu từ 0
    $array1 = array("PHP", "a", 1, 5, "HTML");
    $array2 = array("PHP", "a", 1, 5, "HTML");
    $newArr = array_slice( $array, 1, 2, true );
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";

    //array_splice(array1, offset, length, array2) xóa bỏ 1 đoạn phần tử của mảng array1 từ vị trí offset
// và lấy lenght phần tử. sau đó thay thế nhg phần tử bị loại bỏ bằng array2
    $newArr = array_splice($array1, 2, 2, $array2);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";

    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    //sort(array) sắp xếp các phần tử trong mảng array tăng dần theo giá trị
    $number = array(1, 24, 5, 7, 2, 5, 6);
    echo "<pre>";
    print_r($number);
    echo "</pre>";
   sort($number);
    echo "mảng sắp xếp  theo tăng dần theo giá trị";
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    //rsort(array) sắp xếp các phần tử trong mảng array giảm dần theo giá trị
    rsort($number);
    echo "mảng sắp xếp  theo giảm dần theo giá trị";
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    //ksort(array) sắp xếp các phần tử trong mảng array tăng dần theo khóa
    $array = array("s" => "PHP", "a" => "CSS", "t" => "HTMLL", "h" => "Java");
    ksort($array);
    echo "mảng sắp xếp  theo tăng dần theo khóa";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    //krsort(array) sắp xếp các phần tử trong mảng array giảm dần theo khóa
    krsort($array);
    echo "mảng sắp xếp  theo giảm dần theo khóa";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
