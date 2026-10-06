<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student details</title>
</head>
<body>
    <h1>Student Details</h1>

    <?php 

        require '../config/database.php';

        $stmt = $pdo->prepare(
            "SELECT *
            FROM students
            WHERE id = :id"
        );

        $id = $_GET["id"];

        $stmt->execute([
            "id" => $id,
        ]);
        $student = $stmt->fetch();
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Programme</th>
                </tr>
        </thead>

        <tbody>
            <tr>
                <td><?=   $student["id"] ?></td>
                <td><?=   $student["first_name"] ?></td>
                <td><?=   $student["last_name"] ?></td>
                <td><?=   $student["email"] ?></td>
                <td><?=   $student["programme"] ?></td>
            </tr>
        </tbody>
    </table>

    <p><a href="index.php">Back</a></p>
</body>
</html>