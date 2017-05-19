<?php
// ALGORITM Binary
for ($i = 0 ; $i< 100; $i++){
    $arr[$i]=rand(1,100);
    echo $arr[$i]." ";
}
echo '<br><br><br><br>';
echo '<br><br><br><br>';
$arr = binaryInsertion( $arr );
function binaryInsertion( $array )
{

    for( $i=1; $i < count($array); $i++ )
    {
        $tmp = $array[$i];
        $left = 0;
        $right = $i-1;
        while( $left <= $right )
        {
            $middle = (int)(($left+$right)/2);
            if( $tmp < $array[$middle] )
                $right = $middle - 1;
            else
                $left = $middle + 1;
        }
        for( $j = $i-1; $j >= $left; $j-- )
            $array[$j+1] = $array[$j];
        $array[$left] = $tmp;

    }

    return $array;
}

for ($i = 0 ; $i< count($arr); $i++){
    echo $arr[$i]." ";
}

