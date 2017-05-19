<?php
// ALGORITM MERGE
for ($i = 0 ; $i< 100; $i++){
    $arr[$i]=rand(1,100);
    echo $arr[$i]." ";
}
echo '<br><br><br><br>';
echo '<br><br><br><br>';

function mergeSort($mas)
{
    if(count($mas) <= 1)
    {
        return $mas;
    }
    else
    {
        $q = (int) (count($mas)/2);
        return merge(mergeSort(array_slice($mas, 0, $q)), mergeSort(array_slice($mas, $q)));
    }
}
function merge($leftMas, $rightMas)
{
    $twoMasCount = count($leftMas)+count($rightMas);

    $leftMas[] = INF;
    $rightMas[] = INF;

    $l = 0;
    $r = 0;

    for($i=0; $i<$twoMasCount; $i++)
    {
        if($leftMas[$l] <= $rightMas[$r])
        {
            $mas[] = $leftMas[$l];
            $l++;
        }
        else
        {
            $mas[] = $rightMas[$r];
            $r++;
        }
    }

    return $mas;
}
$arr = mergeSort($arr);
for ($i = 0 ; $i< count($arr); $i++){
    echo $arr[$i]." ";
}
