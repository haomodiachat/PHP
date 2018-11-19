<html>
    <head>
        <style type="text/css">
            * {
                margin: 0px;
                padding: 0px;
            }
            .content {
                margin: 20px auto;
                width: 600px;
                border: 1px solid #999;
                padding: 10px;
            }
            .content h1 {
                color:red;
                text-align: center;
            }
            .content div.row {
                margin-top: 20px;
            }
            .content div.row span{
                display: inline-block;
                width: 255px;
                text-align: right;
            }
            .content div.row input[type=text]{
                padding: 3px 5px;
            }
            .content div.row input[type=submit]{
                padding: 3px 5px;
                display: block;
                margin: 0px auto 20px auto;
            }
            .content div.row p{

                font-weight: bold;
                font-size: 20px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php

            if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"])) {
                $n1  = $_POST["number1"];
                $caculate = $_POST["caculate"];
                $n2  = $_POST["number2"];
                $flag= false;
                if(is_numeric($n1)&& is_numeric($n2)){
                    switch ($caculate) {
                        case "+":
                            $result = $n1 + $n2;
                            break;
                        case "-":
                            $result = $n1 - $n2;
                            break;
                        case "*":
                        case "x":
                            $result = $n1 * $n2;
                            break;
                        case "/":
                        case ":":
                            $result = $n1 / $n2;
                            break;
                        case "%":
                            $result = $n1 % $n2;
                            break;
                        default:
                            $result = $n1 + $n2;
                            $caculate = "+";
                    }
                }
                else {
                    $result="Không thực hiện được";
                }
            }
        ?>
        <div class="content">
            <h1>Mô phỏng máy tính điện tử</h1>
            <form action="#" method="post" name="main-form">
                <div class="row">
                    <span>Số thứ nhất</span>
                    <input type="text" name="number1" value="<?php echo $n1?>">
                </div>
                <div class="row">
                    <span>Phép toán</span>
                    <input type="text" name="caculate" value="<?php echo $caculate?>" >
                </div>
                <div class="row">
                    <span>Số thứ hai</span>
                    <input type="text" name="number2" value="<?php echo $n2?>">
                </div>
                <div class="row">
                    <span></span>
                    <input type="submit" value="Xem kết quả" name="submit">
                </div>
                <div class="row">
                    <p>
                        <?php
                            if($flag==true) {
                                echo "kết quả:". $n1 . " " . $caculate . " " . $n2 . "=" . $result;
                            }
                            else {
                                echo $result;
                            }
                        ?>
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>
<?php
    $number = -10;
    /*if($number %2 ==0) {
        $result = "Số chẵn";
    }
    else {
        $result="số lẻ";
    }
    echo $result;*/
    /*if($number>=0 && $number%2==0) {
        $result ="nguyên dương chăn";
    }
    else if($number>=0 && $number%2==1) {
        $result ="nguyên dương lẻ";
    }
    else if($number<0 && $number%2==0) {
        $result ="nguyên âm chẵn";
    }
    else {
        $result ="nguyên âm lẻ";
    }
    echo $result;*/
   /* $n = $number%2;
    $resultFirst = ($number >= 0)?"nguyên dương":"nguyên âm";
    $resultLast = ($n==0)?"chẵn":"lẻ";
    $result = $resultFirst." ".$resultLast;
    echo $result;*/
