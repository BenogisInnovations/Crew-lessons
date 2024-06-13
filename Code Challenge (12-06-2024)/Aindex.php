<?php 
  include('./assignment.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Report sheet </h1>
    <table border="1">
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Score</th>
        <th>Grade</th>
        <th>Descripter</th>
    </tr>
    <tr>
        <td><?php echo $Name; ?></td>
        <td><?php echo $Class; ?></td>
        <td><?php echo $Score; ?></td>
        <td><?php echo $Grade; ?></td>
        <td><?php echo $Descripter; ?></td>
    </tr>
 </table>
</body>
</html>