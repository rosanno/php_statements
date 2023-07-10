<?php


/**
 * question 3
 */

echo "3.)<br/>";
$monthName = 'March';

switch ($monthName) {
    case 'January':
    case 'March':
    case 'May':
    case 'July':
    case 'August':
    case 'October':
    case 'December':
        $days = 31;
        break;
    case 'April':
    case 'June':
    case 'September':
    case 'November':
        $days = 30;
        break;
    case 'February':
        $days = 28;
        break;
    default:
        $days = 'invalid';
}

echo "Number of days in $monthName: $days<br/><br/>";
