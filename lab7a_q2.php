<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q2</title>
</head>

<body>
    <?php
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                    'name' => 'Bob',
                    'program' => 'BIS',
                    'age' => 20 
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]
        ]; 
    ?>

    <table border="1" cellpaddings="5" cellspacing="1">
        <thead>
            <tr style="border: inherit;">
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['program']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
</body>
</html>
