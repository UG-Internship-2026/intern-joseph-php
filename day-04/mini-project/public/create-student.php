<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h1>Create Student</h1>

    <form action="create-student.php" method="POST">
        <label>First Name:
            <input type="text" name="first_name" required>
        </label>
        <br><br>
        <label>Last Name:
            <input type="text" name="last_name" required>
        </label>
        <br><br>
        <label>Email:
            <input type="email" name="email" required>
        </label>
        <br><br>
        <label>Programme:
            <input type="text" name="programme" required>
        </label>
        <br><br>
        <button type="submit">
            Submit
        </button>

        <a href="index.php">Back</a>
    </form>

    <?php

    require '../config/database.php';
    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $stmt = $pdo->prepare(
            "INSERT INTO students
            (first_name, last_name, email, programme)
            VALUES 
            (:first_name, :last_name, :email, :programme)
        ");
    
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];;
        $programme = $_POST["programme"];
    
    
        $stmt->execute([
            "first_name" => $first_name,
            "last_name" => $last_name,
            "email" => $email,
            "programme" => $programme
        ]);
    }


    
    ?>
</body>
</html>