<?php

//More array Exercises

$web_development = array('frontend'=>[],'backend'=>[]);
$web_development['frontend'][]='xhtml';
$web_development['frontend'][]='CSS';
$web_development['frontend'][]='Flash';
$web_development['frontend'][]='Javascript';
$web_development['backend'][]='Ruby';
$web_development['backend'][]='.Net';

echo '<pre>';
print_r($web_development);
echo '</pre>';



$xhtml = array_search('xhtml',$web_development,true);
$web_development['frontend'][$xhtml]='html';
$flash = array_search('Flash',$web_development['frontend'],true);
array_splice($web_development['frontend'],$flash,1);


echo '<pre>';
print_r($web_development);
echo '</pre>';


//Exercises
$family = ["Annie", "Paul", "Julie", "Max", "Luna", "Pixel"];
print_r("<div>My family:</div>");
foreach ($family as $member) {
    print_r("<p>$member</p>");
}

$recipes = ["Pâtes", "tacos", "Frites", "Pizza", "Muffins"];
print_r("<div>My recipes:</div>");
foreach ($recipes as $recipe) {
    print_r("<p>$recipe</p>");
}

$movies = ["Inception", "Harry Potter", "Lord of the ring"];
print_r("<p>My favorite movie : $movies[2]</p>");

//Associative Arrays and Multidimensional arrays

$me = array('firstname' => 'Layla', 'age' => 33, 'season' => 'autumn', 'soccer'=> 'false');

foreach ($me as $key => $value) {
    print_r("<p>$key : $value</p>");
}

$me['hobbies'] = ['reading','movie','sleeping', 'eat','walk'];

//My dog
$dog=["name"=>"truc","age"=>8,"vegetarian"=>'false',"hobbies"=>['sleeping','eating','sleeping','eating','start again']];

$me['pet']=$dog;

echo '<pre>';
print_r($me);
echo '</pre>';

//Manipulating arrays exercises
$meHobbies = count($me['hobbies']);
$myDogHobbies = count($me['pet']['hobbies']);
$total= $meHobbies+$myDogHobbies;
print_r("<p>I have $meHobbies hobbies</p>");
print_r("<p>My dog has $myDogHobbies hobbies</p>");
print_r("<p>Together we have $total hobbies</p>");

$me['hobbies'][]='new hobby';
$newHobby=$me['hobbies'][count($me['hobbies'])-1];
$meHobbies = count($me['hobbies']);
print_r("<p>I have a new hobbie: $newHobby</p>");

$me['firstname']="Durand";
$name = $me['firstname'];
print_r("<p>my new name is : $name </p>");

//My soul mate
$mySoulMate = array('firstname' => 'Jonas', 'age' => 36, 'season' => 'lent', 'soccer'=> 'false', 'hobbies'=>['walk','sport','eat','reading','movie','travel']);
$OurKidHobbies_intersection=array_values(array_intersect($me['hobbies'],$mySoulMate['hobbies']));
$OurKidHobbies_Fusion=array_values(array_unique(array_merge($me['hobbies'],$mySoulMate['hobbies'])));

echo '<pre>';
print_r("my soul mate : ");
print_r($mySoulMate);
echo '</pre>';

echo '<pre>';
print_r("Hobbies merging");
print_r($OurKidHobbies_Fusion);
echo '</pre>';

echo '<pre>';
print_r("Hobbies intersect");
print_r($OurKidHobbies_intersection);
echo '</pre>';

