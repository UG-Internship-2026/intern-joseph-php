<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $name = $_POST["name"];
        $email = $_POST["email"];
        $age = $_POST["age"];

        if(empty($name)) {
            echo "Name is empty";
        } else {
            echo "<br>Name: " . $name;
        }
        echo "<br>Email: " . $email;
        echo "<br>Age: " . $age;

    ?>

</body>
</html>