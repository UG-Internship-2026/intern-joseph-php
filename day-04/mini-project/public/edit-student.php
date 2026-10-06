<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>
<body>
    <h1>Edit Student</h1>

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
    }
    ?>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $student["id"] ?>">
        <label>First Name:
            <input type="text" name="first_name" value="<?= $student["first_name"] ?>" required>
        </label>
        <br><br>
        <label>Last Name:
            <input type="text" name="last_name" value="<?= $student["last_name"] ?>" required>
        </label>
        <br><br>
        <label>Email:
            <input type="email" name="email" value="<?= $student["email"] ?>" required>
        </label>
        <br><br>
        <label>Programme:
            <input type="text" name="programme" required value="<?= $student["programme"] ?>" >
        </label>
        <br><br>
        <button type="submit">
            Update Student
        </button>

        <a href="index.php">Back</a>
    </form>
</body>
</html>