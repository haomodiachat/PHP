<?php
//câu lệnh break có chức năng thoát khỏi 1 vòng lệnh. nó dc sd thoát ra khỏi 1 vòng lặp
//câu lệnh continue có chức năng dừng vòng lặp tại giá trị đó và nhay sang giá trị khác trong vòng lặp
?>
    <html>
    <head>
        <title>Break - continue</title>
    </head>

    <body>
            <?php
                /*$n = 0;
                for($i=0; $i<=100; $i+=8) {
                    if($n < 3) {
                        if($i % 8 == 0 && $i >0) {
                            echo $i . "<br>";
                            $n++;
                        }
                    }
                    else {
                        break;
                    }
                }*/

                for($i=0; $i<=10; $i++) {
                    if($i==3 || $i==8) continue;
                    echo $i."<br>";
                }
                $a = "Bien a";
                $b = 'Bien b';
                echo "giá trị của biến a: $a <br>";
                echo 'giá trị của biến b: $b';
            ?>
    </body>
    </html>
<?php
