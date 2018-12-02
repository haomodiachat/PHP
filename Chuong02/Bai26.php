<?php
    //array_merge($array1, $array2,...) nhập 2 hay nhiều mảng thành 1 mảng duy nhất
     $array1 = array("a", "b", "c");
     $array2 = array(2, 4, 6);
     $array3 = array("php" => "PHP", "jv" => "Java", "html" => "HTML", "css" => "CSS");
     $newArr = array_merge($array1, $array2, $array3);
     echo "<pre>";
     print_r($newArr);
     echo "</pre>";

     // array_rand($array, $number) lấy ngẫu nhiên $number phần tử từ mảng và đưa vào mảng mới (lấy giá trị khóa)
     $keyarray = array_rand($array3,2);
    echo "<pre>";
    print_r($keyarray);
    echo "</pre>";

    // array_seach ($value, $array) tìm phần tử mang giá trị $value trong mảng array.
    // trả về khóa của phần tử tìm dc
   echo  array_search("PHP", $array3);
   echo "<br>";

   //array_key_exists ($key, $array) kiểm tra khóa $key có tồn tại trong mảng $array kh?
    //nếu có trả về giá trị true
    if(array_key_exists("html", $array3)) {
        echo "Exists";
    }
    echo "<br>";
    //in_array ($value, $array) kiểm tra giá trị $value có tồn tại trong mảng $array kh?
    //nếu có trả về giá trị true
    if (in_array("PHP", $array3)) {
        echo "có tồn tại";
    }

    // sử dụng hàm array_change_key_case($array, case) để chuyển đổi các chỉ số trong mảng
    // thành chữ hoa hoặc chữ thường. kết quả trả về của hàm là một mảng mới.
    $newArr1 = array_change_key_case($array3, CASE_UPPER );
    echo "<pre>";
    print_r($newArr1);
    echo "</pre>";

    //implode($str, $array) chuyển các giá trị của mảng $array thành một chuỗi
    // bao gồm các phần tử cách nhau bỏi ký tự $str
    echo  $str = implode("--", $array3);
    //explode($delimiter, $str) chuyển một chuỗi thành một mảng. tách chuỗi dựa vào
    // $delimiter, mỗi đoạn tách ra sẽ thành một phần tử của mảng
    $fullName = "Phung Thi Hao";
     $newArr2 = explode(" ", $fullName);
    echo "<pre>";
    print_r($newArr2);
    echo "</pre>";
