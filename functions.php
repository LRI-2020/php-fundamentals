<?php
//Acronym

//sum

try{
 echo "<p>" .add('a',5). "</p>";
}

catch (Exception $e){
    echo $e->getMessage();
}

/**
 * @throws Exception
 */
function add($a, $b) : float{

    if(!is_numeric($a) || !is_numeric($b)){
        throw new Exception("the arguments are not of the correct type");
    }

    return $a+$b;
}
//Current Date
echo "<p>" . date('d/m/Y H:i:s'). "</p>";

//Current year
echo "<p>" .date('Y')."</p>";
//Capitalize

$res = capitalise("test");
echo "<p>$res</p>";
function capitalise($word) :string
{
    return ucfirst($word);

}

//Shuffle sentence

function sentence_shuffle($sentence): string
{

    $words = str_split($sentence);
    $shuffleWords = [];

    foreach ($words as $word) {

        $shuffleWords[] = (str_shuffle($word));
    }


    return implode($shuffleWords);

}

$test = "un essai pour le suffle mais je ne sais pas quoi écrire";
$shuffleRes = sentence_shuffle($test);
echo "<p>$shuffleRes</p>";