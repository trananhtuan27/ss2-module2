<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST["so1"];
    $num2 = $_POST["so2"];
    switch ($_POST["calculation"]){
        case "cong" :
            $result = $num1 + $num2;
            break;
        case "tru" :
            $result = $num1 - $num2;
            break;
        case "nhan" :
            $result = $num1 * $num2;
            break;
        case "chia" :
            $result = $num1 / $num2;
            break;
    }
    if ($result == null){
        echo "ki tu khong hop le";
    }



}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <div>
        so1 <input type="text" name="so1"><br>
        so2 <input type="text" name="so2"><br>
        <label>Phep toan</label>
        <input type="submit" value="cong" name="calculation">
        <input type="submit" value="tru" name="calculation">
        <input type="submit" value="nhan" name="calculation">
        <input type="submit" value="chia" name="calculation">
    </div>

</form>
<?php echo "ketqua cua phep toan la :" . $result ?>
</body>
</html>
</body>
</html>

