<html>
<head>
    <title>Chép phạt</title>
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
            background: url("image/hoasen.jpg") ;
            min-height: 200px;
        }
        .content h1 {
            color: red;
            text-align: center;
        }
        .content ul {
            margin: 20px 0px 0px 200px;
        }
        .content ul li {
            margin-top: 5px;
            list-style: decimal inside;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Chép phạt</h1>
        <ul>
            <?php
                //vòng lặp for
            for($i = 1; $i <=10; $i++) {
                echo "<li>.Em hứa sẽ làm bài tập về nhà đầy đủ</li>";
            }
            ?>

        </ul>
    </div>
</body>
</html>
<?php
