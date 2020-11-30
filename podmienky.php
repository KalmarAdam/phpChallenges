<!DOCTYPE html>
<html>
<body>

<form method="GET">

    <input type="text" name="num1" >
    <input type="text" name="num2" >
    <button>SUBMIT</button>
</form>


    <?php

    

        $x = $_GET['num1'];
        $y = $_GET['num2'];

        if ($x > $y){
            echo $x/$y; 
        }
        else {
            echo $y/$x;
        };
        

    ?>
</body>
</html>