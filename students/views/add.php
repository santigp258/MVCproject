<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
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
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <select class="form-control" name="subject" id="subject" required>
                    <option>Select</option>
                    <option value="math">Math</option>
                    <option value="english">English</option>
                    <option value="spanish">Spanish</option>
                    <option value="science">Science</option>
                </select>
            </div>


            <div class="form-group">
                <label for="teacher">Teacher:</label>
                <select class="form-control" name="teacher" id="teacher" required> 
                    <option>Select</option>
                    <option value="santiago">Santiago Guerrero</option>
                    <option value="ana">Ana Martinez</option>
                    <option value="daniel">Daniel Clark</option>
                    <option value="claudia">Claudia Pulgarin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="average">Average:</label>
                <input type="text" class="form-control" id="average" placeholder="Enter Average" required>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
</body>

</html>