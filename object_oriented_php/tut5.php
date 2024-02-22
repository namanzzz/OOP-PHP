<?php
    include('./includes/person.inc.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<!-- PROPERTIES AND METHODS IN OBJECT ORIENTED PHP -->



    <?php
    // $name = "Naman";
    // $age = "22";
    // $eyeColor = "Brown";


    $person1 = new Person();
    $person1->setName('Naman');
    echo $person1->name. "<br>";


    $person2 = new Person();
    $person2->setName('Isha');
    echo $person2->name;

    ?>




</body>

</html>