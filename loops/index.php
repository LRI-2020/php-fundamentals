<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title></title>
</head>
<body>
<form>
    <select>
        <?php

        $countries=array("BE"=>"Belgique",
            "FR"=>"France",
            "NL"=>"Pays-Bas",
            "DE"=>"Allemagne",
            "GB"=>"Angleterre",
            "AT"=>"Autriche",
            "IT"=>"Italie",
            "PT"=>"Portugal",
            "ES"=>"Espagne",
            "GR"=>"Grece");
        foreach ($countries as $code => $country){
            echo '<option name="country" value="'.$code.'" id='.$code.'>' . $country . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="send">
</form>


</body>
</html>