<?php
$baseUrl = 'http://localhost/mvc';

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Grading System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $baseUrl ?>/administrators/views/index.php">Administrators <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $baseUrl ?>/teachers/views/index.php">Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $baseUrl ?>/subjects/views/index.php">Subjects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $baseUrl ?>/students/views/index.php">Students</a>
                </li>
            </ul>
        </div>
            <div class="navbar-nav">
                <a class="nav-link active navbar-brand ml-auto" href="<?php echo $baseUrl ?>">Logout <span class="sr-only">(current)</span></a>
            </div>
    </div>
</nav>