<?php

include 'vendor/autoload.php';

use Classes\RentCosts;
use Classes\RentVechle;
use Classes\BuyVechle;
use Classes\BuyCosts;

// Rent a vechle
$rent = new RentVechle(3, new RentCosts);

echo 'Cost: ' . $rent->cost() . '<br />';
echo 'Charge type: ' . $rent->chargeType() . '<br />';
echo 'Hourly price: ' . $rent->getPrice();

echo '<hr />';

// Buy a vechle
$buy = new BuyVechle(2, new BuyCosts);

echo 'Cost: ' . $buy->cost() . '<br />';
echo 'Charge type: ' . $buy->chargeType() . '<br />';
echo 'Vechle price: ' . $buy->getPrice();