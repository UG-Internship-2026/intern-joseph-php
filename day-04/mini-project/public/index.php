<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="../src/css/styles.css">
</head>
<body>
    <div class="container">
    <div class="header">
        <div>
            <h1 id="title">Student Management System</h1>
            <p>Manage your student records</p>
        </div>

        <a class="add-student" href="create-student.php">
            + Add Student
        </a>
    </div>

    <div class="search-form-container"> 
    <form action="index.php" method="GET" class="search-form" >
        <input type="text" name="search" placeholder="🔎 Search students" class="search-input">
        <button class="search-button" type="submit">
            Search
        </button>
    </form>
    </div>
    <?php 

    require '../config/database.php';

    
    if(isset($_GET["search"])){
        $search = $_GET["search"];
        
        $stmt = $pdo->prepare(
            "SELECT * 
            FROM students
            WHERE first_name LIKE :search
            OR last_name LIKE :search
            OR email LIKE :search
            OR programme LIKE :search"
        );

        
        $stmt ->execute(
            [
                "search" => "%" . $search . "%"
            ]
        );

    }else {
        $stmt = $pdo->query(
            "SELECT *
            FROM students
        ");

    } 

    $students = $stmt->fetchAll();
    

    ?>
    <table class="students-table">
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
                    <td class="actions">
                        <a href="view-student.php?id=<?=$student["id"]?>" class="view-action">View</a>
                        <a href="edit-student.php?id=<?= $student["id"] ?>" class="edit-action">Edit</a>
                        <form action="delete-student.php" method="POST" class="delete-form">
                            <input type="hidden" name="id" value="<?= $student["id"] ?>">
                            <button class="delete-button" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
    <br><br>
    </div>
</body>
</html>


   
