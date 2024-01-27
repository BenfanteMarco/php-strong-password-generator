<?php 

function generatePassword($password_lenght){
    $alp = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890?!.,/[]{}()&@#';
    $alpLeng = strlen($alp) - 1;

    $password = [];

    for ($i = 0; $i < ($password_lenght); $i++) {
        $password[] = $alp[random_int(0, $alpLeng)];
    };

    return implode($password);
}

?>