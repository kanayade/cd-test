<?php
for ($i = 0; $i < 4; $i++) {
    echo $i;
}?>

<?php echo "<br />";?>

<?php
for ($a = 2; $a <= 10; $a += 2) {
    echo $a . "<br>";
}?>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 .'<br />';
}?>
<?php
$i = 0;
while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}?>

<?php
$count = 0;
while ($count <= 20) {
    echo $count . '<br />';
    $count += 1;
}?>

<?php
$count = 0;
while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}?>
<?php
$i = 0;
while ($i < 10) {
    if ($i == 5){
        break;
    }
    echo $i;
    $i++;
}?>
<?php
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        $i++;
        continue;
    }
    echo $i;
    $i++;
}?>
<?php
$count = 0;
while ($count <= 100) {
    if ($count === 20) {
        break;}
        if ($count % 3 === 0) {
            $count++;
            continue;
        }
        echo $count . '<br />';
        $count++;
    }?>
<?php
$i = 0;
do {
    echo $i . '<br />';
    $i++;
}while ($i <5);?>
<?php
$num = 0;
do {
    echo 'num = ' . $num . '<br />';
    $num++;
} while ($num < 3);?>

<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
        echo $FizzBuzz . "<br>";
    }
    elseif ($i % 3 == 0) {
        echo $Fizz . "<br>";
    }
    elseif ($i % 5 == 0) {
        echo $Buzz . "<br>";
    }
    else
        {echo $i . "<br>";}
}?>
<?php
for ($i = 1; $i < 6; $i++) {
    for ($a = 1; $a < 6; $a++) {
        echo "⚫︎";
    }
    echo "<br />";
}?>