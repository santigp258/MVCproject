<?php
require_once('../models/Subjects.php');
require_once('../../users/models/Users.php');


$userModel = new Users();
$userModel->validateSession();

$studentModel = new Subjects();
$id = $_GET['id'];

$studentInformation = $studentModel->getById($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Subject</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Delete Subject</h1>
        </div>
        <form method="POST" action="../controllers/DeleteController.php">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <p>Are you sure delete <strong><?php echo strtoupper($studentInformation[0]['subject']); ?></strong>?</p>
            <input type="submit" class="btn btn-warning" value="Delete">
        </form>
    </div>
</body>

</html>