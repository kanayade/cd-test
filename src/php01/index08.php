<?php
$people = array('Taro','Jiro','Saburo');
var_dump($people);
echo '<br />';?>
<?php
$fruits = array("りんご","みかん","ばなな");
var_dump($fruits);
echo '<br />';?>
<?php echo $people[0];
echo '<br />';?>
<?php echo $people[2];
echo '<br />';?>

<?php
$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
var_dump($people);
echo '<br />';?>
<?php
$people = [
    'person5' => 'taro',
    'person6' => 'jiro',
];
echo $people['person5'];
echo '<br />';?>

<?php
$people = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => "25",
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => "20",
        "gender" => "女性"
    ]
    ];
    echo $people[0]["last_name"];
    echo $people[2]["first_name"];
    echo '<br />';?>

<?php
    $people = array('taro', 'jiro','saburo');
    foreach ($people as $person) {
        echo $person;
        echo '<br />';
    }?>
<?php
    $people = array(
        'person7' => 'nana',
        'person8' => 'yuna',
        'person9' => 'kanako'
    );
    foreach ($people as $person => $name) {
        print $person . "は" . $name . "です" . '<br />';
    }?>

<?php
$people = [
    ['Taro',25,'men'],
    ['Jiro',20,'men'],
    ['hanako',16,'women']
];
foreach ($people as $person) {
    echo $person[0] . '('. $person[1] . '歳' .$person[2] . ')'. '<br />';
}