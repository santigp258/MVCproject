<?php
require_once('../models/Administrators.php');
require_once('../../users/models/Users.php');

$usersModel = new Users();
$usersModel->validateSession();


$id = $_GET['id'];

$administratorModel = new Administrator();
$administrator = $administratorModel->getById($id)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Administrator</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Edit Administrator</h1>
        </div>
        <?php
        if ($administrator) {
            foreach ($administrator as $admin) {
        ?>
                <form method="POST" action="../controllers/EditController.php">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="<?php echo $admin['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Lastname:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required value="<?php echo $admin['lastname']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="user">User:</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="User" required value="<?php echo $admin['user']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="<?php echo $admin['status']; ?>"><?php echo $admin['status']; ?></option>
                            <option value="active">Activo</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Edit</button>
                </form>
        <?php }
        } ?>
    </div>
</body>

</html>