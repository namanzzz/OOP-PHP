<?php
    declare(strict_types = 1);
    // include('./tut11.php');
    include('./tut11.inc.php');

    $oper = $_POST["oper"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $calc = new Calc($oper, (int)$num1, (int)$num2);



    try{
        echo $calc->calculator();

    }catch(TypeError $err){
        echo "Error!: ." . $err->getMessage();
    }
?>