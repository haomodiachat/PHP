<html>
<head>

</head>
<body>
   <div>
       <span>Prev</span>
       <a href="proccess.php?page=1">1</a>
       <a href="proccess.php?page=2">2</a>
       <a href="proccess.php?page=3">3</a>
       <a href="proccess.php?page=4">4</a>
       <a href="proccess.php?page=5">5</a>
       <a href="proccess.php?page=6">6</a>
       <a href="proccess.php?page=7">7</a>
       <a href="proccess.php?page=8">8</a>
       <a href="proccess.php?page=9">9</a>
       <a href="proccess.php?page=10">10</a>
       <a href="#forwaed">Next</a>
       <?php
            $page =(isset ($_GET["page"])==true)?$_GET["page"]:0;
        ?>
       <p class="result">Bạn đang ở trang thứ <?php echo
           $page;?></p>
   </div>
</body>
</html>

