<?php

/**
 * question 4
 */
echo "4.)<br/>";
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
