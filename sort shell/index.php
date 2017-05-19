<?php
// ALGORITM SHELL
for ($i = 0 ; $i< 100; $i++){
    $arr[$i]=rand(1,100);
    echo $arr[$i]." ";
}
echo '<br><br><br><br>';
echo '<br><br><br><br>';
$n = count($arr);
for($d = intval($n/2); $d >= 1 ; $d =intval( $d /2)){
    for($i = $d ; $i < $n ;$i++){
        for($j = $i ; $j >= $d && $arr[$j-$d]>$arr[$j]; $j-=$d){
            $h = $arr[$j];
            $arr[$j] = $arr[$j-$d];
            $arr[$j-$d]=$h;
        }
    }
}
for ($i = 0 ; $i< count($arr); $i++){
    echo $arr[$i]." ";
}

