<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Your Password</h1>

    <p>
        click this link <a href='{{ url("password/reset/{$email_token}") }}'> to reset your password!</a>
    </p>
</body>
</html>