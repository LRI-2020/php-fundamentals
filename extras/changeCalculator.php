<?php

$tests = array(
    array('a','b'),
    array(10,'b'),
    array('a',10),
    array(20,10),
    array(12.47,50),
    array(12.46,50),
    array(12.45,50),
    array(12.3,50),
    array(5.52,10),
    array(5.52,100),
    array(5.52,500),
    array(2,500),
    array(2.1,500),
    array(50,600),
    array(50,1100)
);

foreach($tests as $array){
    try{
        computeChange($array[0], $array[1]);
    }

    catch(Exception $e){
        echo $e->getMessage().'<br>';
    }
}

/**
 * @throws Exception
 */
function computeChange($price, $moneyHanded): void
{

   if(!checkValidity($price,$moneyHanded)){

       echo '<br>price : ' . $price . '<br> money handed : ' . $moneyHanded. '<br>';
       throw new Exception("No enough money to buy item");
    }

    $toGive = $moneyHanded - $price;
    echo '<br>price : ' . $price . '<br> money handed : ' . $moneyHanded . '<br>to give back : ' . $toGive . '<br>';

    $change = evaluateChange($toGive);
    displayChange($change);
}

/**
 * @throws Exception
 */
function checkValidity($price, $money): bool
{

    if(!is_numeric($price) || !is_numeric($money)){
        echo '<br>price : ' . $price . '<br> money handed : ' . $money. '<br>';
        throw new Exception('inputs must be numeric');
    }

    $diff = round($money-$price,2);
    return $diff>=0;
}

function displayChange(array $res): void
{
    $allChanges = [];
    foreach ($res as $change => $number) {

        $allChanges[] = $number . 'x' . $change / 100;
    }

    echo implode(", ", $allChanges). '<br>';
}

function evaluateChange($amount): array
{
    $availableChange = [0.01, 0.02, 0.05, 0.1, 0.2, 0.5, 1, 2, 5, 10, 20, 50, 100, 200, 500];
    $res = [];
    while ($amount > 0) {
        //Get max value of available change
        $currentChange = max($availableChange);


        if (round(($amount - $currentChange), 2) >= 0) {

            $amount = round($amount - $currentChange, 2);

            //if already existing in res, increment
            if (array_key_exists($currentChange * 100, $res)) {
                $res[$currentChange * 100]++;
            } else {
                //if not in res, add it
                $res[$currentChange * 100] = 1;
            }


        } else {

            // echo'<br> the current change cannot be substracted to amount, we remove it of available change';

            //remove current change of available change array
            array_splice($availableChange, array_search($currentChange, $availableChange), 1);
        }
    }

    return $res;
}

