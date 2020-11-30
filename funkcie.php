<!DOCTYPE html>
<html>
<body>

<form method="GET">

<input type="text" name="num1" >
<input type="text" name="num2" >
<button>SUBMIT</button>
</form>
    
<?php
//Vytvor si jednoduchú funkciu ktorá vydelí väčšie číslo 
//menším a vráti výsledok. Použi kod z predošlého challenge-u.

function sum(int $x, int $y) {
    if ($x > $y){
        $z = $x / $y; 
    }
    else {
        $z = $y / $x;
    };
  
  return $z;
}
        $x = $_GET['num1'];
        $y = $_GET['num2'];
echo sum($x,$y) . "<br>";

?>


</body>
</html>
