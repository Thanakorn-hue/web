<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php 
    // ถ้าส่งจำนวนช่องมา
    if (isset($_POST['num1']) && !isset($_POST['text'])) {
        $tnum = intval($_POST['num1']);
    ?>
        <h1>ป้อนคำที่จะเพิ่มลงใน Array</h1>
        <form method="post">
            <?php for($i = 0; $i < $tnum; $i++) { ?>
                <input type="text" name="text[]" required><br>
            <?php } ?>
            <input type="hidden" name="num1" value="<?php echo $tnum; ?>">
            <button type="submit">ส่งค่าผลไม้</button>
        </form>

    <?php 
    // ถ้าส่ง array มาแล้ว
    } elseif(isset($_POST['text'])) { 
        $arr = $_POST['text'];
    ?>
        <h2>ผลลัพธ์ที่ได้</h2>
        <pre><?php print_r($arr); ?></pre>

    <?php } else { ?> 

        <!-- ฟอร์มแรก -->
        <form method="post">
            <h1>ป้อนของที่อยากเพิ่มใน Arrays</h1>
            <label>ป้อนจำนวน Arrays</label>
            <input type="number" name="num1" required><br>
            <button type="submit">ส่งค่า</button>
        </form>

    <?php } ?>  
</div>

</body>
</html>