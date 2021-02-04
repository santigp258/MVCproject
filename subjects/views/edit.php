<?php

require_once('../../users/models/Users.php');

$usersModel = new Users();
$usersModel->validateSession();


require_once('../models/Subjects.php');
$id = $_GET['id'];

$subjectModel = new Subjects();
$subject = $subjectModel->getById($id)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Subject</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
<?php include_once('../../includes/nav.php') ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Edit Subject</h1>
        </div>
        <?php
        if ($subject) {
            foreach ($subject as $sub) {
        ?>
                <form method="POST" action="../controllers/EditController.php">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $sub['subject']; ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Edit</button>
                </form>
        <?php }
        } ?>
    </div>
</body>

</html>