<?php

require './Currencyformat.php';

$cf = new Currencyformat();

echo $cf->formatcurrency(1000045.25) . "<br />";             //1,000,045.25 (USD)         
echo $cf->formatcurrency(1000045.25, "CHF") . "<br />";      //1'000'045.25 
echo $cf->formatcurrency(1000045.25, "EUR") . "<br />";      //1.000.045,25 
echo $cf->formatcurrency(1000045, "JPY") . "<br />";         //1,000,045 
echo $cf->formatcurrency(1000045, "LBP") . "<br />";         //1 000 045 
echo $cf->formatcurrency(1000045.25, "INR") . "<br />";      //10,00,045.25 