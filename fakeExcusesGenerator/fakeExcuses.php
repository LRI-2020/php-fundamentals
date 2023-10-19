<?php

GenerateExcuse();
//echo $isValid ? '<p>true</p>' : '<p>false</p>';;
function isFormValid($inputs): bool
{
    return checkIsset($inputs) && notEmpty($inputs);
}

function notEmpty(array $inputs): bool
{
    $res = true;
    foreach ($inputs as $key => $val) {
        $trimVal = trim($val);
        if (empty($trimVal))
            $res = false;
    }

    return $res;
}

function checkIsset(array $inputs): bool
{
    $res = true;
    foreach ($inputs as $key => $val) {

        if (!isset($val))
            $res = false;
    }

    return $res;
}

function getFormInputs(): array
{
    $inputs = [];
    $inputs['name'] = $_POST["name"];
    $inputs['kidGender'] = $_POST["kidGender"];
    $inputs['teacherName'] = $_POST["teacherName"];
    $inputs['teacherGender'] = $_POST["teacherGender"];
    $inputs['reason'] = $_POST["reason"];

    return $inputs;
}

function GenerateExcuse()
{
    $inputs = getFormInputs();
    if (!isFormValid($inputs)) {
        $errMsg = "<p>Error! You didn't correctly fulfill the form.</p>";
        echo $errMsg;
        exit();
    }

    $teacher = getTeacher($inputs['teacherGender'], $inputs['teacherName']);
    $kidName = $inputs['name'];
    $date = date('d/m/Y');
    $reason = getReason($inputs['kidGender'], $inputs['reason']);

    echo "<p>$teacher, $kidName won't come to class today $date, because $reason</p>";

}

function getReason($kidGender, $reason):string
{
    $kid = $kidGender=="F"? "she" : "he";
    $possessive = $kidGender=="F"? "her" : "his";
    $excuse=bullshitExcuse($kid);

    switch($reason){
        case"1":
            $excuse = "$kid is ill";
            break;
        case"2":
            $pet = getPet();
            $excuse = "$possessive $pet is dead this morning";
            break;

        case"3":
            $sport = getSport();
            $excuse = "$kid must go to the $sport training";
            break;
    }

    return $excuse;
}

function getSport():string
{
    $sports=[
        "quidditch",
        "aquaponey",
        "mermaiding"
    ];

    return $sports[rand(0,count($sports)-1)];

}

function getPet():string
{
    $pets = [
        "crab",
        "spider",
        "wale",
        "earthworm"
    ];

    return $pets[rand(0,count($pets)-1)];
}

function bullshitExcuse($kidGender):string
{
    $bullshit = [
        "was too tired",
        "forgot to wake up",
        "thought that was the holidays"
    ];

    $excuse = $bullshit[rand(0,count($bullshit)-1)];

    return "$kidGender $excuse";
}

function getTeacher($teacherGender, $teacherName):string
{
    $status = $teacherGender=="F"? "Miss" : "Mister";
    $name = trim($teacherName);

    return "$status $name";
}
