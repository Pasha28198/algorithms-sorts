<?php
for ($i = 0 ; $i< 100; $i++){
    $arr[$i]=rand(1,100);
    echo $arr[$i]." ";
}
echo '<br><br><br><br>';
echo '<br><br><br><br>';

for ($k = count($arr) - 1; $k > 0; $k--) {
    $swapped = false;

    for ($i = 0; $i < $k; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            $elem_a = $arr[$i];
            $elem_b = $arr[$i + 1];
            $arr[$i] = $elem_b;
            $arr[$i + 1] = $elem_a;
            $swapped = true;
        }
    }

    for ($i = $k; $i > 0; $i--) {
        if ($arr[$i] < $arr[$i - 1]) {
            $elem_a = $arr[$i];
            $elem_b = $arr[$i - 1];
            $arr[$i] = $elem_b;
            $arr[$i - 1] = $elem_a;

            $swapped = true;
        }
    }

    if (!$swapped)
        break;
}

for ($i = 0 ; $i< count($arr); $i++){
    echo $arr[$i]." ";
}

