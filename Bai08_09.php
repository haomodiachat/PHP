
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
        .content div.result {
            margin-left: 50px;
        }
        .content div.result img {
           width: 100px;
            height: 100px;
            overflow: hidden;
            float: left;
        }
        .content div.result p {
            text-align: justify;
            font-size: 22px;
            height: 100px;
            line-height: 100px;
        }
        .content div.result p span {
            font-style: italic;
        }
    </style>
</head>
<body>
<?php
  $day= "";
  $month= "";
  $image = "";
  $name= "";
  $time= "";
  if(isset($_POST["day"]) && isset($_POST["month"])) {
         $day = $_POST["day"];
         $month =$_POST["month"];

        $flagShow = true;
        if(is_numeric($day) && is_numeric($month)) {

            switch ($month) {
                case 1:
                    if ($day <= 19) {
                        $image = "a";
                        $name = "Ma Kết";
                        $time = "23/12 - 19/01";
                    }
                    if ($day >= 20) {
                        $image = "b";
                        $name = "Bảo bình";
                        $time = "20/01 - 19/02";
                    }
                    if ($day < 1 || $day > 31) $flagShow = false;
                    break;

                case 2:
                    if ($day <= 19) {
                        $image = "b";
                        $name = "Bảo Bình";
                        $time = "20/01 - 19/02";
                    }
                    if ($day >= 20) {
                        $image = "c";
                        $name = "Song Ngư";
                        $time = "20/02 - 21/03";
                    }
                    if ($day < 1 || $day > 29) $flagShow = false;
                    break;
                default:
                    $flagShow = false;
            }
        }
            else {
                $flagShow = false;


        }
  }

?>
<div class="content">
    <h1>Lấy chòm sao</h1>
    <form action="" method="post" name="main-form">
        <div class="row">
            <span>Ngày sinh</span>
            <input type="text" name="day" value="<?php echo $day?>">
        </div>
        <div class="row">
            <span>Tháng sinh</span>
            <input type="text" name="month" value="<?php echo $month?>" >
        </div>
        <div class="row">
            <span></span>
            <input type="submit" value="Lấy chòm sao" name="submit">
        </div>
    </form>
    <?php
        if($flagShow == true) {
            $result = '<div class="result">
            <img src="image/' . $image . '.jpg" alt="' . $image . '">
            <p>' . $name . ' <span>(' . $image . ':' . $time . ')</span></p>
    </div>';
        } else {
            $result = "dữ liệu không hợp lệ";
        }
        echo $result;
    ?>

</div>
</body>
</html>

