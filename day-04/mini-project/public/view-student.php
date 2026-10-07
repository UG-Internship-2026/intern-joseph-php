<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student details</title>

    <link rel="stylesheet" href="../src/css/view-student.css">
</head>

<body>

    <div class="view-container">

        <div class="view-header">
            <h1 class="view-title">Student Details</h1>
            <p class="view-description">
                View the student's information
            </p>
        </div>

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

        <div class="student-details">

            <table class="student-details-table">

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
                        <td><?= $student["id"] ?></td>
                        <td><?= $student["first_name"] ?></td>
                        <td><?= $student["last_name"] ?></td>
                        <td><?= $student["email"] ?></td>
                        <td><?= $student["programme"] ?></td>
                    </tr>
                </tbody>

            </table>

        </div>

        <div class="view-actions">
            <a href="index.php" class="view-back-button">Back</a>
        </div>

    </div>

</body>
</html>