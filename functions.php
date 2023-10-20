<?php

function sentence_shuffle($sentence): string
{

    $words = str_split($sentence);
    $shuffleWords=[];

    foreach($words as $word){

        $shuffleWords[] = (str_shuffle($word));
    }



    return implode($shuffleWords);

}

$test = "un essai pour le suffle mais je ne sais pas quoi écrire";
$shuffleRes = sentence_shuffle($test);
echo "<p>$shuffleRes</p>";