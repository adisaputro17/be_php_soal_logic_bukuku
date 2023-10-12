<!DOCTYPE html>
<html>
<body>

<?php

$bil = array(77, 11, 66, 75, 77, 1, 9, 3, 7, 58, 7, 69, 36, 9, 33, 33, 33, 31, 21, 98, 1);

for ($x = 0; $x < count($bil); $x++) {
	for ($y = $x+1; $y < count($bil); $y++){
    	if ($bil[$y] < $bil[$x]){
        	$temp = $bil[$x];
            $bil[$x] = $bil[$y];
            $bil[$y] = $temp;
        }
    }
    echo $bil[$x] . " " ;
}

echo "<br>";

$bil = array(77, 11, 66, 75, 77, 1, 9, 3, 7, 58, 7, 69, 36, 9, 33, 33, 33, 31, 21, 98, 1);

for ($x = 0; $x < count($bil); $x++) {
	for ($y = $x+1; $y < count($bil); $y++){
    	if ($bil[$y] > $bil[$x]){
        	$temp = $bil[$x];
            $bil[$x] = $bil[$y];
            $bil[$y] = $temp;
        }
    }
    echo $bil[$x] . " " ;
}

echo "<br>";

$kata = "kasur inijg rusak";
$kata_array = str_split($kata);
$last_index = count($kata_array) - 1;
$is_palindrom = 1;
for ($x = 0; $x < intval(count($kata_array)/2); $x++) {
	$y = $last_index - $x;
    if ($kata_array[$x] != $kata_array[$y]){
    	$is_palindrom = 0;
        break;
    }
}
if($is_palindrom == 1){
	echo "kata palindrom";
}else{
	echo "bukan palindrom";
}
echo "<br>";

function initAntrian(int $panjang){
	$antrian = array_fill(0, $panjang, NULL);
	return $antrian;
}

function pushAntrian(array $antrian, int $nilai){
	for ($x = 0; $x < count($antrian); $x++) {
    	if ($antrian[$x] == NULL){
        	$antrian[$x] = $nilai;
            break;
        }
    }
    return $antrian;
}

function popAntrian(array $antrian){
	for ($x = 1; $x < count($antrian); $x++) {
    	$antrian[$x-1] = $antrian[$x];
        $antrian[$x] = NULL;
    }
    return $antrian;
}

function checkAntrian(array $antrian){
	for ($x = 0; $x < count($antrian); $x++) {
    	echo $antrian[$x] . " " ;
    }
    echo "<br>";
}

$antrian = initAntrian(5);
$antrian = pushAntrian($antrian,77);
$antrian = pushAntrian($antrian,11);
$antrian = pushAntrian($antrian,66);
$antrian = pushAntrian($antrian,75);
$antrian = pushAntrian($antrian,77);
$antrian = pushAntrian($antrian,1);
checkAntrian($antrian);

$antrian = popAntrian($antrian);
checkAntrian($antrian);
$antrian = pushAntrian($antrian,1);
checkAntrian($antrian);
?> 

</body>
</html>
