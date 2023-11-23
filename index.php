<?php
function random_password( $length = 8 ) {
    $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $caratteri ), 0, $length );
    return $password;
}
var_dump(random_password());
?>  

<h1>Genera Password</h1>

<form action="" method="GET">
  <input type="submit" value="genera">
  <h2><?php echo random_password() ?></h2>
</form>

