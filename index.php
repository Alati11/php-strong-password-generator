
<?php

include __DIR__ . '/function.php';
$error  = "errore password, lunghezza minima 6 caratteri";
// var_dump(isset($_GET['length']));
// var_dump($_GET['length']);

$valid_password = intval($_GET['length']) ; 

?>

<h1>Genera Password</h1>

<!-- <form action="funtion.php" method="GET"> -->
<form action="" method="GET">
    <input type="number" name="length" placeholder="lunghezza password">
    <input type="submit" value="genera"> 
</form>

<?php
    if ($valid_password > 6  ) {
        echo random_password($valid_password);

    }else

        echo $error;
?>



