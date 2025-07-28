<?php
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}
outputNumber(2);?>
<?php
function outputHello()
{
    echo "Hello world";
}
outputHello();?>
<?php
function text($number1,$number2)
{
    $value = $number1 + $number2;
    return $value;
}
$total = text(2,4);
echo $total;?>

<?php
function score($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
    echo $total . "点なので合格です";
} else {
    echo $total . "点なので不合格です";
}
}
echo (score(80, 60, 90));?>

<?php
function triangle($bottom,$height)
{
    return $bottom * $height / 2;
}
function square($height,$width)
{
    return $height * $width;
}
function trapezoid($upperbase,$bottom,$height)
{
    return ($upperbase + $bottom) * $height / 2;
}
echo "三角形の面積: " . triangle(3,2) . "<br>";
echo "四角形の面積: " . square(10,10) . "<br>";
echo "台形の面積:" . trapezoid(4,6,2) . "<br>";?>