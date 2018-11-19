
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
        if(is_numeric($day) && is_numeric($month)) {

        }
  }

?>
<div class="content">
    <h1>Lấy chòm sao</h1>
    <form action="#" method="post" name="main-form">
        <div class="row">
            <span>Ngày sinh</span>
            <input type="text" name="number1" value="<?php echo $day?>">
        </div>
        <div class="row">
            <span>Tháng sinh</span>
            <input type="text" name="caculate" value="<?php echo $month?>" >
        </div>
        <div class="row">
            <span></span>
            <input type="submit" value="Lấy chòm sao" name="submit">
        </div>
    </form>
    <?php
        $result = '<div>'
    ?>
    <div class="result">
       <img src="image/a.jpg">
        <p>Cung Bạch Dương <span>(Aries 22/03 - 20/04)</span></p>
    </div>
</div>
</body>
</html>

