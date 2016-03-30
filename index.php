<?php
echo "<br>..........................#1<br>";
function v($s, $t){
    echo 'V =', $s/$t;
}
v(100,10);
echo "<br>..........................#2<br>";
function summ(){
    $i = range(1, 112, 3);
    echo array_sum($i);
}
summ();

echo "<br>..........................#3<br>";
$arNum = array();
for($i = 0; $i <= 11; $i++){
    $arNum[$i] = rand(0, 1);
}
print_r($arNum);

echo "<br>..........................#4<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>homework</title>
</head>
<body>
<form id="feedback" method="post" class="my-form">
    <p>
        <label for="a">a</label>
        <input type="number" name="a" id="a" placeholder="a?" value="<?=isset($_REQUEST['a']) ? $_REQUEST['a'] : ''?>" >
        <label for="b">b</label>
        <input type="number" name="b" id="b" placeholder="b?" value="<?=isset($_REQUEST['b']) ? $_REQUEST['b'] : ''?>" >
    </p>
    <p>
        <input type="submit" name="submit" value="Расчитать">
    </p>
    <?function rass($a, $b){
    if ($a > $b) {
        echo 'Сумма не существует';
    }
    else {
        $arrrass = range($a, $b);
        echo array_sum($arrrass);
    }
}
    rass($_REQUEST['a'], $_REQUEST['b']);
?>
</form>
</body>
</html>
