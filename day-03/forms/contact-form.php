<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <form action="process-contact.php" method="POST">
        <label>Name:  
            <input type="text" name="name" required>
        </label>
        <br><br>
        <label>Email:  
            <input type="email" name="email" required>
        </label>
        <br><br>
        <label>Subject: 
            <input type="text" name="subject" required>
        </label>
        <br><br>
        <label>Message: 
            <textarea  name="message" required minlength="10"></textarea>
        </label>
        <br><br>
        <button type="submit">
            Submit
        </button>
    </form>
</body>
</html>