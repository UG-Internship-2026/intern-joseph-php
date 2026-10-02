<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration</h1>
    <form action="registration-process.php" method="POST">
        <label>Name: 
            <input type="text" name="name" required>
        </label>
        <br><br>
        <label>Email:
            <input type="email" name="email" required>
        </label>
        <br><br>
        <label>Password:
            <input type="password" name="password" minlength="8" required>
        </label>
        <br><br>
        <label>Confirm Password:
            <input type="password" name="confirm_password" minlength="8" required>
        </label>
        <br><br>
        <button type="submit">
            Submit
        </button>
    </form>
</body>
</html>