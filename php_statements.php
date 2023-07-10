<?php

/**
 * question 1
 */
$word1 = 'class';
$word2 = 'kodego';
$word3 = 'top';

if (strlen($word1) > 5) {
    echo "$word1 is more than 5 characters.<br />";
} else {
    echo "$word1 is not more than 5 characters.<br />";
}


if (strlen($word2) > 5) {
    echo "$word2 is more than 5 characters.<br />";
} else {
    echo "$word2 is not more than 5 characters.<br />";
}

if (strlen($word3) > 5) {
    echo "$word3 is more than 5 characters.<br />";
} else {
    echo "$word3 is not more than 5 characters.<br /><br/>";
}


/**
 * question 2
 */
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

/**
 * question 3
 */


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

/**
 * question 4
 */

$studentsJson = '[{"name" : "John Garg","age"  : "15","school" : "Ahlcon Public school"},
                {"name" : "Smith Soy","age"  : "16","school" : "St. Marie school"},
                {"name" : "Charle Rena","age"  : "16","school" : "St. Columba school"}]';

$students = json_decode($studentsJson, true);

foreach ($students as $student) {
    echo "Name: " . $student['name'] . "<br/>";
    echo "Age: " . $student['age'] . "<br/>";
    echo "School: " . $student['school'] . "<br/>";
    echo "<br />";
}


/**
 * question 5
 */

$rows = 10;

echo "<table>";
echo "<tr><th></th>";

for ($i = 1; $i <= $rows; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";


for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    echo "<th>$i</th>";


    for ($j = 1; $j <= $rows; $j++) {
        $result = $i / $j;
        $roundedResult = round($result, 2);
        echo "<td>$roundedResult</td>";
    }

    echo "</tr>";
}

echo "</table>";
