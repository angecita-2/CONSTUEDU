<?php

$pass = '123456';


// Ver el ejemplo de password_hash() para ver de dónde viene este hash.
$pass = password_hash('123456', PASSWORD_DEFAULT,['cost'>=12]);
echo $pass;


?>