Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.

<?php
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>";

$browser = get_browser(null, true);
var_dump($browser);
?>