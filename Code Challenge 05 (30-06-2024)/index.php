<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="index.php" method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operation">
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (-)</option>
            <option value="multiply">Multiply (×)</option>
            <option value="divide">Divide (/)</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit">Calculate</button>
    </form>
    <?php include 'Assignment.php'; ?>
</body>
</html>
