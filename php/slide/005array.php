<?php
// mảng đa chiều
    $multi = array(
        'ha_noi' => array("hoàn kiếm", "hai ba trưng", "tây hồ", "bắc từ liêm" => array("phuong" => "đức thắng", "đông ngạc", "cổ nhuế")),
        'da_nang' => array("Sơn trà", "ngũ hành sơn" => array(1, 4, 8), "liên chiểu"),
        'hue' => array("gò vấp" => array(12, 3, 6, 8, 10),"Củ Chi", "Cần giờ", "nhà bè", "bình chánh",1, 12, 3, 5, 7)
    );
    echo "<pre>";
    print_r($multi);
    echo "</pre>";