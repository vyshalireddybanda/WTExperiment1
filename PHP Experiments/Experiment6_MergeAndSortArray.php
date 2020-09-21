<br/><br/><br/><p align="center">
<?php
$a1 = array(5,20,3,12);
$a2 = array(15,2,10);
echo "The first array before merging and sorting is: ";
$len1 = count($a1);
for($x = 0; $x < $len1; $x++) {
    echo $a1[$x];
    echo " ";
}
echo "<br/>";

echo "The second array before merging and sorting is: ";
$len2 = count($a2);
for($x = 0; $x < $len2; $x++) {
    echo $a2[$x];
    echo " ";
}

echo "<br/>";

$numbers= array_merge($a1,$a2);
echo "The merged array is: ";
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo " ";
}
echo "<br/>";

rsort($numbers);
$arrlength1 = count($numbers);
echo "The array after sorting in descending order is:";
for($x = 0; $x < $arrlength1; $x++) {
    echo $numbers[$x];
    echo " ";
}
?>
</p>
