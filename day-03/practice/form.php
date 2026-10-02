<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3 Contact Form</title>
</head>
<body>

    <h1>
        Student Details 
    </h1>
    <form action="process.php" method="POST">
        <label for="name">Name:
            <input type="text" name="name">
        </label>
        <br><br>

        <label> Email:
            <input type="email" name="email">
        </label>
        <br><br>
        <label>Age:
            <input type="number" name="age">
        </label>
        <br><br>

        <button type="submit">Submit</button>

    </form>
</body>
</html>