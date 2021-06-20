<?php
$arrayInt = [];

$value = $_GET['value'];
$operator = $_GET['operator'];

$array = str_split($value);

foreach ($array as $char) {
    if (is_numeric($char)) {
        array_push($arrayInt, intval($char));
    }
}
var_dump($arrayInt);

$lastValue = $arrayInt[0];
$i = 0;
foreach ($arrayInt as $int) {
    if ($i !== 0) {
        if ($operator === '+') {
            $lastValue += $lastValue;
        }
        if ($operator === '-') {
            $lastValue -= $lastValue;
        }
        if ($operator === '/') {
            $lastValue /= $lastValue;
        }
        if ($operator === 'x') {
            $lastValue *= $lastValue;
        }
    }
    $i++;
}
?>
    <br>
<?php
echo $lastValue;
