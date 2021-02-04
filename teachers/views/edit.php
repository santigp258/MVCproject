<?php
require_once('../models/Teachers.php');
require_once('../../users/models/Users.php');

$usersModel = new Users();
$usersModel->validateSession();

$id = $_GET['id'];

$teachersModel = new Teachers();
$teachers = $teachersModel->getById($id)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Edit Teacher</h1>
        </div>
        <?php
        if ($teachers) {
            foreach ($teachers as $teacher) {
        ?>
                <form method="POST" action="../controllers/EditController.php">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="<?php echo $teacher['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Lastname:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required value="<?php echo $teacher['lastname']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="user">User:</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="User" required value="<?php echo $teacher['user']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="<?php echo $teacher['status'] ?>"><?php echo $teacher['status'] ?></option>
                            <option value="active">Activo</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Edit</button>
                </form>
        <?php  }
        } ?>
    </div>
</body>

</html>