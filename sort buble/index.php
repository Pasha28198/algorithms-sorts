<?php

for ($i = 0 ; $i< 100; $i++){
    $arr[$i]=rand(1,100);
    echo $arr[$i]." ";
}
echo '<br><br><br><br>';
echo '<br><br><br><br>';
$loop = true;
while ($loop) {
    $loop = false;
    for ($i = 0; $i < count($arr)-1; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            $elem_a = $arr[$i];
            $elem_b = $arr[$i + 1];
            $arr[$i] = $elem_b;
            $arr[$i + 1] = $elem_a;

            $loop = true;
        }
    }
}

for ($i = 0 ; $i< count($arr); $i++){
    echo $arr[$i]." ";
}

