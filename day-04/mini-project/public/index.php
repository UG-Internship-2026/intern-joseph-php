<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
    <h1>Student Management System</h1>

    <?php 

    require '../config/database.php';

    $stmt = $pdo->query(
        "SELECT *
        FROM students
    ");

    $students = $stmt->fetchAll();
    ?>
        <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Programme</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($students as $student):?>
                    <tr>
                        <td><?= $student["id"] ?></td>
                        <td><?= $student["first_name"] ?></td>
                        <td><?= $student["last_name"] ?></td>
                        <td><?= $student["email"] ?></td>
                        <td><?= $student["programme"] ?></td>
                        <td><a href="view-student.php?id=<?=$student["id"]?>">View</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    

</body>
</html>


   