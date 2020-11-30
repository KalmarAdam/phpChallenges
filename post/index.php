<!DOCTYPE html>
<html>
<body>


<form method="POST">
    E-mail: <input type="text" name="email">
    <button type="submit">SUBMIT</button>
</form>

<?php

$email = $_POST['email']."\n";
$file = "test.txt";
file_put_contents($file,$email,FILE_APPEND);
echo file_get_contents($file)."\n";

?>


</body>

</html>

