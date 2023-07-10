<?php


/**
 * question 5
 */
echo "5.)<br/>";
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
