<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2>Calculator in PHP</h2>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Number 1</label>
        <input type="number" name="num1" required><br><br>
        <label>Number 2</label>
        <input type="number" name="num2" required><br><br>
        <label>Operations: </label>
        <select name="Operations">
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Split">Split</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['Operations'];
        switch ($operacion) {
            case 'Add':
                $resultado = $num1 + $num2;
                break;            
            case 'Subtract':
                $resultado = $num1 - $num2;
                break;
            case 'Multiply':
                $resultado = $num1 * $num2;
                break;
            case 'Split':
                $resultado = $num1 / $num2;
                break;
            default:
                $resultado = "Without results";
                break;
        }
        echo "<br>The result of the operation: ".$operacion." is equal to ".$resultado;
    }
    ?>
</body>
</html>