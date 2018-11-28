<html>
<head>
    <title>Vòng lặp while</title>
    <style type="text/css">
        .content {
            margin: 20px auto;
            width: 800px;
            border: 1px solid #999;
            padding: 10px;

        }
        .content h1 {
            color: red;
            text-align: center;
        }
        .content ul {
            margin-top: 23px;
            text-align: center;
        }
        .content ul li {
            display: inline-block ;
            list-style: none;
            margin-left: 30px;
        }
        .content ul a img{
            width: 200px;
        }
        .content div.result {
         margin-left: 350px;

        }
    </style>
</head>
<body>
<div class="content">
    <h1>Vẽ tam giác</h1>
    <ul>
        <li><a href="Bai11_12.php?type=1" ><img src="image/g.jpg">1</a></li>
        <li><a href="Bai11_12.php?type=2" ><img src="image/a.jpg">2</a></li>
        <li><a href="Bai11_12.php?type=3" ><img src="image/b.jpg">3</a></li>
    </ul>
    <div class="result">
        <?php
        //sử dụng hàm để lặp lại giá trị i
            $result= "";
            if(isset($_GET["type"])) {
               $type = $_GET["type"];
               switch ($type) {
                   case 1:
                      $i= 1;
                      $n = 6;
                      while ($i <= $n) {
                          $result .= str_repeat("*", $i)."<br>";
                          $i++;
                      }
                       break;
                   case 2:
                       $i= 1;
                       $n = 6;
                       while ($i <= $n) {
                           $result .= str_repeat("*", $n)."<br>";
                           $n--;
                       }
                       break;
                   case 3:
                       $i= 1;
                       $n = 6; // số dòng

                       while ($i <= $n) {
                           $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                           $character = str_repeat("*", 2*$i - 1);
                           $result .= $space.$character."<br>";
                           $i++;
                       }
                       break;
               }
            }
            echo $result;
        ?>
    </div>
</div>

</body>
</html>
<?php
