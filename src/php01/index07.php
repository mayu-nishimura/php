<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
echo "<br />";

echo $people[0];
echo "<br />";
echo '<br />';

$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);
echo "<br />";
echo '<br />';

$people = [
  'person1' => 'taro',
  'person2' => 'jiro',
];

echo $people['person1'];
echo "<br />";
echo '<br />';

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
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

echo $people[0]["last_name"];
echo "<br />";
echo '<br />';

$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}
echo '<br />';

$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}
echo '<br />';
echo '<br />';


//my answer_incorrect
$people = [
  [
    "first_name" => "Taro",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "first_name" => "Jiro",
    "age" => 20,
    "gender" => "men"
  ],
  [
    "first_name" => "hanako",
    "age" => 16,
    "gender" => "women"
  ]
];

foreach ($first_name as $person) {
  echo $first_name . "(" . $age . "gender" . ")" '<br />';
}
echo '<br />';
echo '<br />';


//answer
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}