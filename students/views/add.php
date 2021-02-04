<?php
require_once('../../users/models/Users.php');
require_once('../../methods.php');

$userModel = new Users();
$userModel->validateSession();

$method = new Methods();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
<?php include_once('../../includes/nav.php') ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Add Student</h1>
        </div>
        <form method="POST" action="../controllers/AddController.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>

            <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required>
            </div>

            <div class="form-group">
                <label for="identification">Identification:</label>
                <input type="text" class="form-control" id="identification" name="identification" placeholder="Identification" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <select class="form-control" name="subject" id="subject" required>
                    <option>Select</option>
                    <?php
                    $subjects = $method->getSubjects();
                    if ($subjects) {
                        foreach ($subjects as $subject) { ?>
                            <option value="<?php echo $subject['subject'] ?>"><?php echo $subject['subject'] ?></option>

                    <?php   }
                    }

                    ?>
                </select>
            </div>


            <div class="form-group">
                <label for="teacher">Teacher:</label>
                <select class="form-control" name="teacher" id="teacher" required>
                    <option>Select</option>
                    <?php
                    $teachers = $method->getTeachers();
                    if ($teachers) {
                        foreach ($teachers as $teacher) {
                    ?>
                            <option value="<?php echo $teacher['name']. ' ' . $teacher['lastname']; ?>"><?php echo $teacher['name']. ' ' . $teacher['lastname']; ?></option>
                    <?php }
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="average">Average:</label>
                <input type="text" class="form-control" id="average" name="average" placeholder="Enter Average" required>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
</body>

</html>