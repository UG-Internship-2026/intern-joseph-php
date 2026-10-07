<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>

    <link rel="stylesheet" href="../src/css/create-student.css">
</head>

<body>

    <div class="container">

        <h1 id="title">Create Student</h1>

        <p class="form-description">
            Add a new student to the system
        </p>

        <form action="create-student.php" method="POST" class="student-form">

            <div class="form-group">
                <label for="first_name">First Name</label>

                <input
                    type="text"
                    id="first_name"
                    name="first_name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>

                <input
                    type="text"
                    id="last_name"
                    name="last_name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="programme">Programme</label>

                <input
                    type="text"
                    id="programme"
                    name="programme"
                    required
                >
            </div>

            <div class="form-actions">

                <button type="submit" class="submit-button">
                    👨‍🎓  Create Student
                </button>

                <a href="index.php" class="back-button">
                    🔙 Back
                </a>

            </div>

        </form>

        <?php

        require '../config/database.php';
        require '../src/validation.php';

        try {

            if($_SERVER["REQUEST_METHOD"] === "POST") {

                $stmt = $pdo->prepare(
                    "INSERT INTO students
                    (first_name, last_name, email, programme)
                    VALUES
                    (:first_name, :last_name, :email, :programme)
                ");

                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $email = $_POST["email"];
                $programme = $_POST["programme"];

                $errors = validateStudent(
                    $first_name,
                    $last_name,
                    $email,
                    $programme
                );

                if(empty($errors)) {

                    $stmt->execute([
                        "first_name" => $first_name,
                        "last_name" => $last_name,
                        "email" => $email,
                        "programme" => $programme
                    ]);

                    header("Location: index.php");
                    exit;

                } else {

                    for($i = 0; $i < count($errors); $i++) {
                        echo $errors[$i];
                    }

                }
            }

        } catch(PDOException $e) {

            if($e->getCode() === "23000") {

                echo "Email already exists. Please use a different email.";

            } else {

                echo $e->getMessage();

            }
        }

        ?>

    </div>

</body>
</html>