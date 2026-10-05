<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $dsn="mysql:host=localhost;dbname=student_management";
        $username="root";
        $password="";

        $pdo = new PDO($dsn, $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $stmt = $pdo->prepare(
            "INSERT INTO students (first_name, last_name, email, programme)
            VALUES (:first_name, :last_name, :email, :programme)"
        );
    
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $programme = $_POST["programme"];


        $stmt->execute([
            "first_name" => $first_name,
            "last_name" => $last_name, 
            "email" => $email,
            "programme" => $programme
        ]);

        

        
        echo "You have succesfully added " . $first_name . " " . $last_name . " who is offering " . $programme;
    
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }
}

?>
    <form action="add-student.php" method="POST" >
        <label>First name:
            <input type="name" name="first_name" required >
        </label>
        <br><br>
        <label>Last name:
            <input type="name" name="last_name" required >
        </label>
        <br><br>
        <label>Email: 
            <input type="email" name="email" required >
        </label>
        <br><br>
        <label>Programme
            <input type="text" name="programme" required >
        </label>
        <br><br>
        <button type="submit">
            Add student
        </button>
    </form>
</body>
</html>


