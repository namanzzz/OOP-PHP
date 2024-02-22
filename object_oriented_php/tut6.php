<?php
    include('./includes/tut6.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $person1 = new Person("Naman", 22, "Brown");
        // echo $person1->name . "<br>";
        $person1->setName("Naman Matoliya");
        $person1->getInfo();


        //deleting an object 
        $person2 = new Person("ayushi" ,22, "black");
        unset($person2); // deleted object by triggering the destructor inside the class
        $person2->getInfo();

     ?>

</body>
</html>