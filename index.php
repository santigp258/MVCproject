<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes Sytem</title>
</head>

<body>
    <h1>Login</h1>

    <form action="users/controllers/LoginController.php" method="POST">

        <label for="user">User</label>
        <input type="text" name="user" id="user" required="" autocomplete="off" placeholder="User">
        <br>
        <br>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" required="" placeholder="Password">
        <br><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>