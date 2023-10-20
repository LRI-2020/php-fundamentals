<?php

//De-capitalize

$test = "JE DOIS ETRE EN MINUSCULE";

function toLower(string $test): string
{
    $words = explode(" ", $test);
    $lowercaseWords = [];

    foreach ($words as $word) {

        $lowercaseWords[] = strtolower($word);
    }

    return implode(" ", $lowercaseWords);
}

echo toLower($test);


//Create a random words generator,

echo Generate();

function generateWord($letterCount): string
{
    $letters = range('a', 'z');
    $res = [];
    for ($count = 0; $count < $letterCount; $count++) {
        $res[] = $letters[rand(0, count($letters) - 1)];
    }

    return implode($res);
}

function Generate()
{
    $word1Count = rand(1, 5);
    $word2Count = rand(7, 15);
    $word1 = generateWord($word1Count);
    $word2 = generateWord($word2Count);

    return '<p>' . $word1 . ' ' . $word2 . '</p>';

}


//feedback
echo feedback("test sans class");

$feedBackTests = ["notice" => "notice test", "error" => "error test", "warning" => "warning test", "undefined" => "undefined test"];

foreach ($feedBackTests as $key => $value) {

    echo feedback($value, $key);
}

function feedback($message, $class = "info"): string
{

    $classRes = $class == "warning" ? "warning" : ($class == "error" ? "error" : "info");

    $message = "$classRes : $message";

    return '<div class=' . $classRes . '>' . $message . '</div>';
}

//æ to ae

$tests2 = ["cæcotrophie", "chænichthys", "microsphæra", "sphærotheca"];

foreach ($tests2 as $test) {
    echo "<p>" . setAAndE($test) . "</p>";
}

function setAAndE($word): string
{
    $letters = explode('æ', $word);
    $result = array_merge(array_slice($letters, 0, 1), array('ae'), array_slice($letters, 1));
    return implode($result);
}


//ae to æ
$tests = ["caecotrophie", "chaenichthys", "microsphaera", "sphaerotheca"];

foreach ($tests as $testAe) {
    echo "<p>" . setAE($testAe) . "</p>";
}


function setAE($word): string
{

    $letters = str_split($word);
    for ($index = 0; $index < (count($letters) - 1); $index++) {

        $currentLetter = $letters[$index];
        $nextLetter = $letters[$index + 1];

        if ($currentLetter == 'a' && $nextLetter == 'e') {

            $replacement = 'æ';

            //replace a by æ
            array_splice($letters, $index, 1, $replacement);

            //remove e from array
            array_splice($letters, $index + 1, 1);
        }

    }

    return implode($letters);
}

//Acronym

$test = " test for the acronym method";

echo "<p>" . getAcronym($test) . "</p>";
function getAcronym($input): string
{

    $words = explode(" ", $input);

    $res = [];

    foreach ($words as $word) {

        $res[] = ucfirst($word[0]);
    }

    return implode($res);
}

//sum

try {
    echo "<p>" . add('a', 5) . "</p>";
} catch (Exception $e) {
    echo $e->getMessage();
}

/**
 * @throws Exception
 */
function add($a, $b): float
{

    if (!is_numeric($a) || !is_numeric($b)) {
        throw new Exception("the arguments are not of the correct type");
    }

    return $a + $b;
}

//Current Date
echo "<p>" . date('d/m/Y H:i:s') . "</p>";

//Current year
echo "<p>" . date('Y') . "</p>";
//Capitalize

$res = capitalise("test");
echo "<p>$res</p>";
function capitalise($word): string
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