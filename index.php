
<?php

include __DIR__ . '/function.php';

?>

<h1>Genera Password</h1>

<form action="" method="GET">
  <input type="submit" value="genera">
  <h2><?php echo random_password() ?></h2>
</form>

