
<?php

include __DIR__ . '/function.php';
$error  = "errore password, scegli min 8 e max 20 caratteri";
// var_dump(isset($_GET['length']));
// var_dump($_GET['length']);

$valid_password = intval($_GET['length']) ; 

?>

<h1>Genera Password</h1>

<form action="" method="GET">
    <h3>Quanto deve essere luna la tua password?</h3>
    <p>Scegli da 8 a 20 caratteri</p>
    <input type="number" name="length" placeholder="lunghezza password">
    <input type="submit" value="genera"> 
</form>

<?php

    if ($valid_password >= 8 && $valid_password <= 20) {
        echo random_password($valid_password);
    } else
        echo $error;
        $valid_password = " ";

?>
    <!-- <h3><?php echo $error; ?></h3>     -->




