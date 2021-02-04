<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
</head>
<?php include_once('./includes/cdn.php') ?>
<style>
    .personalizated {
        width: 40%;
        margin: 0 auto;
        margin-top: 10%;
    }
</style>

<body>
    <div class="personalizated">
        <form action="./users/controllers/LoginController.php" method="post">
            <h2 class="text-center">Log in</h2>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="User" id="user" name="user" required="required">
            </div>
            <div class="form-group mt-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary mt-2 w-50">Log in</button>
            </div>
        </form>
    </div>
</body>

</html>