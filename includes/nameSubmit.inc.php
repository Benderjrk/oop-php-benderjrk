<?php
    include '../classes/person.class.php';
    echo 'Welcome to the home planet: <br>';
    echo Person::$homePlanet . '<br>';
?>

Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo htmlspecialchars($_POST['age']); ?> years old.


<?php
echo '<br>';
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>";

$browser = get_browser(null, true);
var_dump($browser);
?>