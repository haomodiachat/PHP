<?php
//câu lệnh include và require cùng có chức năng là kéo 1 file nào đó vào file hiện tại
// nếu bị lỗi câu lệnh require sẽ ngừng thực hiện chương trình
//câu lệnh include sẽ tiếp tục thực hiện chương trình
//include_one và require_one sẽ kiểm tra xem file đó đã dc kéo vào file hiện tại chưa, nếu có rồi thì nó sẽ kh thực hiện nữa
   // require "Bai19.php";
    require ("Bai19.php");
    $result = sumDigit(189);
    echo $result;

?>

