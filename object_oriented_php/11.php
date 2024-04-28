<?php

declare(strict_types=1);
include_once('./includes/tut11.inc.php');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="includes/tut11.cal.inc.php" method="post">
        <p>My Own Calculator</p>

        <input type="number" name="num1" placeholder="First Number">

        <select name="oper">

            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>

        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">
            Calculate
        </button>



    </form>




</body>

</html>
