<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student Record</title>
</head>
<body>
    <?php
    require '../config/database.php';

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $id = $_POST["id"];

        $stmt = $pdo->prepare("
            DELETE FROM students
            WHERE id = :id
        ");
        
        
        $stmt->execute([
            "id" => $id
        ]);

        header("Location: index.php");
        
    }
    ?>

    <a href="index.php">
        Back
    </a>

</body>
</html>