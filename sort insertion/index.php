<?php
for ($i = 0 ; $i< 100; $i++){
    $arr[$i]=rand(1,1000);
    echo $arr[$i]." ";
}
echo '<br><br><br><br>';
echo '<br><br><br><br>';
for ($i = 0 ; $i< count($arr); $i++){
    for ($j = 0 ; $j< count($arr); $j++) {
        if ($arr[$i] > $arr[$j]) {
            $h = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $h;
        }
    }
}
for ($i = 0 ; $i< 100; $i++){
    echo $arr[$i]." ";
}

