<?php
for ($i = 1; $i <= 5; $i++) {
  echo $i*2 . "<br />";
}
echo "<br />";


$i = 0;

while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}
echo "<br />";


$count = 0;

while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}
echo "<br />";


$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}
echo "<br />";
echo "<br />";


$count = 0;
while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}
echo "<br />";
echo "<br />";



  $num = 0;
do {
  echo 'num = ' . $num . '<br />';
  $num++;
} while ($num < 3);
echo "<br />";
echo "<br />";


for ($count = 1; $count <= 50; $count++) {
  if ($count % 3 == 0 && $count % 5 == 0) {
    echo "FizzBuzz" . '<br />';
  } else if ($count % 3 === 0) {
    echo "Fizz" . '<br />';
  } else if ($count % 5 === 0) {
    echo "Buzz" . '<br />';
  } else {
    echo $count . '<br />';
  }
}
echo "<br />";
echo "<br />";


$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}
echo "<br />";
echo "<br />";

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}