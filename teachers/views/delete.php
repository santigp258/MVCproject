<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Teacher</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Delete Teacher</h1>
        </div>
        <form method="POST" action="../controllers/DeleteController.php">
        <input type="hidden" name="id" value="">
        <p>Are you sure delete this teacher?</p>
        <input type="submit" class="btn btn-warning" value="Delete">
        </form>
    </div>
</body>

</html>