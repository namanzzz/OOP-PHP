


<?php
    // static keyword in OOP PHP
    include('./includes/tut8.inc.php')
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
            echo Person::$drinkingAge ."<br>";
            // we can access the static variable without having to create the object first

            Person::setDrinkingAge(34);
            // echo Person::$drinkingAge;

            $person1 = new Person("Naman", "22", "Brown");
            echo $person1->getDrinkingAge();

    ?>

</body>
</html>