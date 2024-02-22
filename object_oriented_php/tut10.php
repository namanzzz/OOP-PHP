<?php
    declare(strict_types = 1); // enabling strict mode
    include('includes/tut10.inc.php');
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
            $person1 = new Person();
            try{
                // $person1->setName(2);
                $person1->setName("Naman");
                echo $person1->getName();
            }catch(TypeError $e){
                    echo $e->getMessage();
            }


     ?>

</body>
</html>