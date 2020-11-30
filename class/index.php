<?php
    include 'person.inc.php';
?>
<!DOCTYPE html>
<html>
<body>
    
<?php
    $person1 = new Person();
    $person1->setName("Daniel");
    echo $person1->name; 

    $person2 = new Person();
    $person2->setName("Adam");
    echo $person2->name;
    
?>

</body>
</html>