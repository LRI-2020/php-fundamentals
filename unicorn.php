<?php
function displayGif($species): string
{

    return $species == "human" ? 'https://giphy.com/embed/bMvUymzBRRLWdXydn5/video' :
        ($species == "cat" ? "https://giphy.com/embed/cwQCUhKible5mGrtMO/video" : "https://giphy.com/embed/Ze44chcCSUpyVN1gmQ/video");


}

if (isset($_GET["species"])) {
    $species = $_GET["species"];

    // $gifUrl = displayGif($species);
    $gifUrl = displayGif($species);


    $result = <<<MYTAG
    <div style="width:480px"><iframe allow="fullscreen" height="250" src="$gifUrl" width="480"></iframe></div>
    MYTAG;

    echo $result;
}
?>


<form method="get" action="unicorn.php">

    <p>What Are you?</p>
    <label for="unicorn">Unicorn</label>
    <input type="radio" id="unicorn" name="species" value="unicorn">

    <label for="human">Human</label>
    <input type="radio" id="human" name="species" value="human">

    <label for="cat">Cat</label>
    <input type="radio" id="cat" name="species" value="cat">


    <input type="submit" name="submit" value="Greeting!">
</form>