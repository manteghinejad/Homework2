<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>جلسه دوم</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
@$a = $_GET['firstnumber'];
@$b = $_GET['secondnumber'];
@$operator = $_GET['operator'];
$d = null;
if ($operator == '+'){
    $d = $a + $b;
} elseif ($operator == '-'){
    $d = $a - $b;
} elseif ($operator == '*'){
    $d = $a * $b;
} elseif ($operator == '/'){
    $d = $a / $b;
} else
    $d = "Plesae fill in the blanks!"

?>
<div>
    <h1>Simple PHP Calculator</h1>
    <form action="" method="get" enctype="multipart/form-data">
        <input name="firstnumber" value="<?php echo $a ?>" type="number" placeholder="First number"> <br>
        <input name="secondnumber" value="<?php echo $b ?>" type="number" placeholder="Second number"> <br>
        <input name="operator" value="+" type="submit">
        <input name="operator" value="-" type="submit">
        <input name="operator" value="*" type="submit">
        <input name="operator" value="/" type="submit"><br>
        <p class='fill'>
            <?php echo $d ?>
        </p>
    </form>
</div>

</body>
</html>