<?php
    // declare(strict_types = 1);
    include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP Skeleton</title>
    <!-- compiled and minified Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class='container'>
        <div class='col-sm-11 col-md-8 col-lg-6 bg-light m-auto'>
            <form action="includes/nameSubmit.inc.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" class="form-control" name="age">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <?php
    echo 'Static Variable';
    echo Person::$homePlanet;
    ?>
</body>
</html>