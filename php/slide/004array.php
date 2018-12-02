<?php
//khai báo mảng kết hợp
//key của nó có thể là một số hoặc 1 chuỗi
//chú ý chuỗi không nên có dấu và sử dụng khoảng cách
    $number = array();
    $number['ha_noi'] = 10000;
    $number['HCM'] = "Hồ Chí Minh";
    $number['da_nang'] = 10;
    $number['1'] = 300000;
    $number['4'] = "hello";
    echo '<br> Mảng kết hợp';
    echo "<pre>";
    print_r($number);
    echo "</pre>";
    //truy cập vào 1 phần tủ
    echo $number['HCM'];
