<?php

$Tests=[
    array(1,1,2,2),
    array(1,1,1,1),
    array(5,4,3,2)
];

foreach ($Tests as $array){

    try{
        echo 'point A : ('.$array[0].';' .$array[1]. ') is '.manhattan($array[0],$array[1],$array[2],$array[3]).' 
        blocks away from point B : ('.$array[2].';'.$array[3].')<br>';
    }
    catch(Exception $e){

        echo $e->getMessage();
    }
}

function manhattan($x1,$y1,$x2,$y2) : int{
    if(!isValidPositiveNumbers($x1,$y1,$x2,$y2))
        throw new Exception("All parameters must be positive integers");
    return (abs($x2-$x1)+abs($y2-$y1));
}

function isValidPositiveNumbers(...$args):bool
{
    $res = true;
    foreach ($args as $arg){

        if($arg < 0 || !is_int($arg))
            $res=false;
    }

    return $res;
}