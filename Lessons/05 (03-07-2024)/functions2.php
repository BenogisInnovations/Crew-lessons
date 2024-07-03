<?php

// variable ✅

// Conditions ✅

// Function ✅

function main($amount,$from,$to){
    echo 'Which Currency do you want to convert <hr>';
    echo "Amount Converting is: $amount $from<br>";

    $fromCurrency = findCurrency($from); // Using the findCurrency to get the currency we are converting from
    $toCurrency = findCurrency($to); // Using the findCurrency to get the currency we are converting to

    $rate = findCurrencyRate($fromCurrency,$toCurrency); // Storing the currency rate in variable rate
    
    $theConvertedAmount = convertedAmount($rate,$amount); // Storing the the converted amount in variable amount

    echo "$from $amount to $to is: $theConvertedAmount $to"; // Displaying the amount
}

// This fucntion retursn the country's currency
function findCurrency($country){
    switch ($country) {
        case 'GH':
            return 'GHC';
        break;
        case 'US':
            return 'USD';
        break;
        case 'EN':
            return 'GBP';
        break;
        
        default:
            return 'Unsupported Currency';
        break;
    }
}

// This Function returns the currency rate
function findCurrencyRate($from, $to){
    $rate = 0;

    if ($from == 'USD' && $to == 'GHC') {
        $rate = 15.0;
    } elseif($from == 'GBP' && $to == 'GHC'){
        $rate = 19.0;
    } elseif($from == 'GBP' && $to == 'USD'){
        $rate = 1.5;
    } elseif($from == 'USD' && $to == 'GBP'){
        $rate = 0.5;
    } elseif($from == 'GHC' && $to == 'USD'){
        $rate = 0.2;
    } 

    return $rate;

}

// This function return the converted amount
function convertedAmount($rate,$amount){
    return $rate * $amount;
}

main(100,'GH','US');


// Class

// Object

// Library

// Framework

// Programming Language