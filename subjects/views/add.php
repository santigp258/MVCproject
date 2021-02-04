<?php
require_once('../../users/models/Users.php');

$usersModel = new Users();
$usersModel->validateSession();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subject</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
<?php include_once('../../includes/nav.php') ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Add Subject</h1>
        </div>
        <form method="POST" action="../controllers/AddController.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Add</button>
        </form>
    </div>
</body>

</html>