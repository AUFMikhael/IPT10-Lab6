<?php

require_once 'FileUtility.php';
require_once 'Random.php';

$generator = new RandomDataGenerator();
$people = [];

for ($i = 0; $i < 300; $i++) {
    $people[] = $generator->generatePerson();
}

// Save to persons.csv
FileUtility::writeToFile('persons.csv', $people);

echo "300 records have been generated and saved to persons.csv.";

?>
