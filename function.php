<?php
function random_password( $length = " ") {
    $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $caratteri ), 0, $length );
    return $password;
    
}

// var_dump(random_password());
?>  