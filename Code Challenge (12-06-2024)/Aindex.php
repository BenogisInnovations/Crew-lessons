<?php 
  include('./assignment.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1> Report sheet </h1>
    <table>
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