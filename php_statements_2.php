<?php

/**
 * question 2
 */
echo "2.)<br/>";
$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$deal1Cost = $price1 / $quantity1;
$deal2Cost = $price2 / $quantity2;

if ($deal1Cost < $deal2Cost) {
    echo "Deal first is the best deal.<br /><br/>";
} elseif ($deal2Cost < $deal1Cost) {
    echo "Deal second is the best deal.<br/><br/>";
} else {
    echo "Both deals have the same cost.<br/><br/>";
}
