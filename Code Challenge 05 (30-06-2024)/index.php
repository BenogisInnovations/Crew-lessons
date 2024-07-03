<?php
include 'Assignment.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operation">
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (-)</option>
            <option value="multiply">Multiply (×)</option>
            <option value="divide">Divide (÷)</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit">Calculate</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = calculate($num1, $num2, $operation);
        
        echo "<h1>Result: $result</h1>";
    }
    ?>
</body>
</html>
