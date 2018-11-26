<html>
<head>
    <title>Image gallery</title>
    <style type="text/css">
        .content {
            margin: 20px auto;
            width: 300px;
            border: 1px solid #999;
            padding: 10px;
        }
        .content h1 {
            color: red;
            text-align: center;
        }
        .content div.image{
            margin: 20px 0px;
        }
        .content div.image img{
            margin: 10px 50px;
            width: 200px;

        }
        .content div.image a{
            text-decoration: none;
            display: inline-block;
            background: aqua;
            padding: 3px 10px;
           margin: 0px 100px;
        }
        .content div.image a:hover{
            color: red;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Image gallery</h1>
       <div class="image">
           <?php
                $i=1;
                do {
                    echo ' <img src="image/'.$i.'.jpg">';
                    $flagShow = 0;
                    if(isset($_GET["show"])) {
                       $flagShow = $_GET["show"];
                    }
                    $i++;
                }while ($i <= 4 && $flagShow == 1 );
           ?>
           <a href="Bai13_do_while.php?show=1">Show All</a>
           <a href="Bai13_do_while.php?show=0">Show Demo</a>
       </div>
    </div>
</body>
</html>
<?php
