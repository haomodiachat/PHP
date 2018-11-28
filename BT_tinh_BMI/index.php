<html>
    <head>
        <title>Tính BMI</title>
        <style type="text/css">
            .content  {
                border: 2px solid black;
                width: 500px;
                margin: 20px auto;
                padding: 10px;
            }
            .content div p {
                font-size: 20px;
                font-weight: bold;
            }

        </style>
    </head>
    <body>
        <div class="content">
            <?php
            $chieucao = "";
            if(isset($_POST["chieucao"])) $chieucao = $_POST["chieucao"];
            $cannang = "";
            if(isset($_POST["cannang"])) $cannang = $_POST["cannang"];
            $kq = $cannang/($chieucao*$chieucao);
            ?>
            <form action="" method="post">
                <div class="chieucao">
                    <p>Chiều cao (M):</p>
                    <input type="text" name="chieucao" value="<?php echo $chieucao;?>" placeholder="Nhập chiều cao theo đơn vị mét">
                </div>

                <div class="cannang">
                    <p>Cân nặng (KG):</p>
                    <input type="text" name="cannang" value="<?php echo $cannang;?>" placeholder="Nhập cân nặng theo đơn vị kilogram">
                </div>

                <div>
                    <p>Chỉ số khối cơ thể</p>

                </div>
                <input type="submit" name="BMI" value="Tính BMI">
            </form>
            <?php
                 echo "Kết quả:".$kq;
                 echo "<br>";
                 if($kq < 18.5) {
                     echo "Gầy, nguy cơ phát triển bệnh thấp";
                 }
                 else if($kq > 18.5 && $kq < 24.9) {
                     echo "Bình thường, nguy cơ phát triển bệnh trung bình";
                 }
                 else if($kq > 25.0 && $kq < 29.9) {
                     echo "Hơi béo, nguy cơ phát triển bệnh cao ";
                 }
                 else if($kq > 30 && $kq < 34.9) {
                     echo "Béo phì cấp độ 1, nguy cơ phát triển bệnh cao ";
                 }
                 else if($kq > 35 && $kq < 39.9) {
                     echo "Béo phì cấp độ 2, nguy cơ phát triển bệnh rất cao ";
                 }
                 else if ($kq > 40.0){
                     echo "Béo phì cấp độ 3, nguy cơ phát triển bệnh ở mức độ nguy hiểm ";
                 }
                 else {
                     echo "không xác định được";
                 }
            ?>
        </div>
    </body>

</html>

