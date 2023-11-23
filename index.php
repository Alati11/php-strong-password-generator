
<?php

include __DIR__ . '/function.php';

// var_dump(isset($_GET['length']));
// var_dump($_GET['length']);

$valid_password = $_GET['length']; 

?>

<h1>Genera Password</h1>

<!-- <form action="funtion.php" method="GET"> -->
<form action="" method="GET">
    <input type="number" name="length" placeholder="lunghezza password">
    <input type="submit" value="genera"> 
</form>

<h2><?php echo random_password($valid_password) ?></h2>


