<?php
declare(strict_types=1);

function largestDifference(array $input)
{
    $highestNumber = PHP_INT_MIN;
    $lowestNumber = PHP_INT_MAX;

    foreach ($input as $number) {

        if (!is_numeric($number)) {
            throw new Exception("Error. Input should be numbers only.");
        }

        if ($highestNumber < $number){
            $highestNumber = $number;
        }

        if ($lowestNumber > $number){
            $lowestNumber = $number;
        }
        
    }

    return $highestNumber - $lowestNumber;

}

$input = readline("Type collection of numbers: ");
$input = trim($input);
try {

    $difference = largestDifference(explode(" ",$input));
    echo $difference;

} catch (\Throwable $th) {

    echo $th->getMessage();

}