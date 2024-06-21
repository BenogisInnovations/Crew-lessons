<?php
 include ('./assignment.php')
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
        table, th,td {
            border: 1px solid black;
        }
        th, td {
            padding: 8;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Score</th>
            <th>Grade</th>
            <th>Descriptor</th>
        </tr>

        <tr>
            <td><?php echo $Name ?></td>
            <td><?php echo $Class ?></td>
            <td><?php echo $Score ?></td>
            <td><?php echo $Grade ?></td>
            <td><?php echo $Descriptor ?></td>
        </tr>
    </table>
</body>
</html>