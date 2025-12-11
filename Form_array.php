<?php
if(isset($_POST['text1']) && isset($_POST['num1'])){
$test= $_POST['text1'];
$tnum= $_POST['num1'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post">
            <h1>ป้อนชื่อจังหวัดที่คุณรู้จัก</h1>
            <label>ป้อนจำนวนชื่อจังหวัดที่รู้จัก</label>
            <input type="number" name="num1" min="1" max="77"><br>
            <button type="submit">ตกลง</button>
        </form>
        <?php 
        if (isset($_POST["num1"]) && !isset($_POST["text1"])) {
            $tnum = ($_POST["num1"]); ?>
            <form action="" method="post">
                <?php for($i = 0; $i < $tnum; $i++) { ?>
                    <input type="text" name="text1[]" required><br>
                <?php } ?>
                <input type="hidden" name="num1" value="<?php echo $tnum; ?>">
                <button type="submit">ส่งค่าชื่อจังหวัด</button>
                
            </form>

            <?php } ?>

    </div>

    <!-- <div>
        <form action="" method="post">
            <h1>ป้อนของที่อยากเพิ่มใน Arrays</h1>
            <div>
                <label for="select">ป้อนนำนวน Arrays</label>
                <input type="number" name="num1" required><br>
                <label for="select">ป้อนคำที่จะเพิ่มไปอยู่ Arrays</label>
                
            </div>
            <div>
                <button type="submit">ส่งค่า</button>
            </div>
        <?php if(isset($_POST['text1']) && isset($_POST['num1'])){ ?>

        <?php for($i=0; $i<=$tnum; $i++){ ?>

            <input type="text" name="text1" placeholder="" required><br>

        <?php } ?> 

            <button type="submit">ส่งค่าผลไม้</button>
            <h2>ผลลัพธ์ที่ได้ <?php echo $tnum; ?></h2>

        <?php } ?>
        </form>
        
        
    </div> -->
</body>
</html>