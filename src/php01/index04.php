<?php
$a = 5;

if ($a === 5) {
echo "\$aは5です"; //;を忘れない、ifの後空ける、$aの前と5の後は空けない
}
echo "<br />";//;を忘れない


$a = 7;

if ($a === 5) {
echo "\$aは5です";
}else{
echo "\$aは5以外です";
}
echo "<br />";
echo "<br />";


$a = 7;

if ($a === 5) {
echo "\$aは5です";
}elseif ($a === 7) {
echo "\$aは7です";
}else{
echo "\$aは5と7以外です";    
}
echo "<br />";
echo "<br />";

$people = "Saburo";

switch  ($people) {
case "Taro";
echo "太郎です";
break;
case "Jiro";
echo "次郎です";
break;
case "Saburo";
echo "三郎です";
break;
}
echo "<br />";
echo "<br />";

$a = 7;

$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;
