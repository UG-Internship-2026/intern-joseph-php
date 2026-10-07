<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>

    <link rel="stylesheet" href="../src/css/edit-student.css">
</head>
<body>

    <div class="edit-container">

        <div class="edit-header">
            <h1 class="edit-title">Edit Student</h1>
            <p class="edit-description">
                Update the student's information
            </p>
        </div>

        <?php 
        require '../config/database.php';

        $stmt = $pdo->prepare(
            "SELECT *
            FROM students
            WHERE id = :id
        ");
        
        $id = $_GET["id"];

        $stmt->execute([
            "id" => $id
        ]);

        $student = $stmt->fetch();


        if($_SERVER["REQUEST_METHOD"] === "POST") {
            
            $stmt = $pdo->prepare(
                "UPDATE students
                SET
                    first_name = :first_name,
                    last_name = :last_name,
                    email = :email,
                    programme = :programme
                WHERE id = :id"
            );
            
            $id = $_POST["id"];
            $first_name = $_POST["first_name"];
            $last_name= $_POST["last_name"];
            $email = $_POST["email"];
            $programme = $_POST["programme"];
            
            $stmt->execute(
                [
                    "id" => $id,
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "email" => $email,
                    "programme" => $programme
                ]
            );
            header("Location: index.php");
        }
        ?>

        <form method="POST" class="edit-form">

            <input
                type="hidden"
                name="id"
                value="<?= $student["id"] ?>"
            >

            <div class="edit-form-group">
                <label for="first_name">First Name:</label>
                <input
                    type="text"
                    id="first_name"
                    name="first_name"
                    value="<?= $student["first_name"] ?>"
                    required
                >
            </div>

            <div class="edit-form-group">
                <label for="last_name">Last Name:</label>
                <input
                    type="text"
                    id="last_name"
                    name="last_name"
                    value="<?= $student["last_name"] ?>"
                    required
                >
            </div>

            <div class="edit-form-group">
                <label for="email">Email:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?= $student["email"] ?>"
                    required
                >
            </div>

            <div class="edit-form-group">
                <label for="programme">Programme:</label>
                <input
                    type="text"
                    id="programme"
                    name="programme"
                    required
                    value="<?= $student["programme"] ?>"
                >
            </div>

            <div class="edit-form-actions">

                <button
                    type="submit"
                    class="update-button"
                >
                    Update Student
                </button>

                <a
                    href="index.php"
                    class="back-button"
                >
                    Back
                </a>

            </div>

        </form>

    </div>

</body>
</html>