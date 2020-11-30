<!DOCTYPE html>
<html>
<body>

  
<?php

$telo = [
    "jakub" => [
        "vyska" => "150cm",
         "vaha" => "50kg"]
        ];
echo($telo['jakub']['vaha']);

echo "<br>";

$arr = [
    "prvy" => [
        "meno"=>"Adam",
        "priezvisko"=>"Kalmar",
        "vek"=>17
    ],
    "druhy" => [
        "meno"=>"Peter",
        "priezvisko"=>"Cmorik",
        "vek"=>69
    ]
    ];
echo $arr["druhy"]["vek"];

/*
$age = array( "Peter" => array("Vek"=>"35","koncatiny"=>"3"),

   "Nicolas" => array("Vek"=>"37","koncatiny"=>"4"),
    
);
echo $age['Peter']['Vek'];
foreach ($age as $person)
echo $person['koncatiny']
*/

?>

</body>
</html>