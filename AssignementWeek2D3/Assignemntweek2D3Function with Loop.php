<?php

function maths_table($table_number) {
 
$counter=1;

while ($counter<=10){

    echo $table_number .'x'. $counter .'=' .  ($table_number * $counter);
 
    $counter++;
 
 }

}

maths_table(2);

maths_table(3);

?>

