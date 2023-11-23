
<?php

include __DIR__ . '/function.php';

?>

<h1>Genera Password</h1>

<form action="" method="GET">
    <input type="number" name="$length" placeholder="lunghezza password">
    <input type="submit" value="genera"> 
</form>

<h2><?php echo random_password() ?></h2>


