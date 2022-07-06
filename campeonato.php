<?php

$times = array(
    "time-A",
    "time-B",
    "time-C",
    "time-D",
    "time-E"
);
//adiciona no inicio

        printData($times);
        array_unshift($times, "time-F","time-G");

//adiciona no final

        printData($times);
        array_push($times, "time-H", "time-I");

//remove o inicio

        printData($times);
        array_shift($times);

//remove o final

        printData($times);
        array_pop($times);
        printData($times);



function printData($array)
{
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    echo "<br>";
}