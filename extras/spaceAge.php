<?php

$seconds = [1000000000, 100000000, 500000000];
$planets = ["Mercury", "Earth", "Venus", "Mars", "Jupiter"];

foreach ($seconds as $second) {
    echo '<br>';
    foreach ($planets as $planet) {

        try {
            echo 'test => ' . $second . ' seconds equals ' . spaceAge($second, $planet) . ' years on ' . $planet . '<br>';
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}


function spaceAge($seconds, $planet): float
{

    $earthAge = getEarthAge($seconds);
    try {
        return convertEarthAge($earthAge, $planet);
    } catch (Exception $e) {
        throw new Exception ($e->getMessage());
    }
}

function getEarthAge($seconds): float
{

    return round($seconds / 3600 / 24 / 365.25, 2);
}

function convertEarthAge($earthAge, $planet): float
{

    return match ($planet) {
        "Mercury" => round($earthAge / 0.2408467, 2),
        "Venus" => round($earthAge / 0.61519726, 2),
        "Mars" => round($earthAge / 1.8808158, 2),
        "Jupiter" => round($earthAge / 11.862615, 2),
        "Earth" => $earthAge,
        default => throw new Exception("Unknown planet"),
    };
}