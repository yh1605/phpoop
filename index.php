<?php
require("classes/Caluculator.php");
$cal = new Caluculator;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $cal->title;?></title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1">
        <select name="select">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2">
        <button type="submit" name="sub">Caluculator</button>
    </form>
<?php
    if(isset($_POST["sub"])){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $select = $_POST["select"];

        echo $cal->calculate($num1, $num2, $select);
    }
?>
</body>
</html>