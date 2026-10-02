<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="login-process.php" method="POST">
        <label>
            Email: <br>
            <input type="email" name="email">
        </label>
        <br><br>
        <label>
            Password: <br>
            <input type="password" name="password">
        </label>
        <br><br>
        <button type="submit">
            Submit
        </button>

    </form>
</body>
</html>