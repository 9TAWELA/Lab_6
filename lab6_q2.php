<?php
$students = [
    ['name' => 'Ahmed Ali', 
     'Program' => 'BIT',
     'Age' => '19'
    ],
    ['name' => 'Abobakar', 
     'Program' => 'BIT', 
     'Age' => '21'
    ],
    ['name' => 'Luay', 
     'Program' => 'BIT',
     'Age' => '20'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['Program']; ?></td>
            <td><?php echo $student['Age']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
