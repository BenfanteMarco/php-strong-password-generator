<?php 

if(isset($_GET['password_lenght']) && ($_GET['password_lenght'])){
    $password_lenght = $_GET['password_lenght'];

    function generatePassword($password_lenght){
        $alp = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890?!.,/[]{}()&@#';
        $alpLeng = strlen($alp) - 1;

        $password = [];

        for ($i = 0; $i < ($password_lenght); $i++) {
            $password[] = $alp[random_int(0, $alpLeng)];
        };

        return implode($password);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-strong-password-generator</title>
</head>
<body>
    <h2 class="p-3">Digita la lunghezza della password che desideri:</h2>
    <div class="p-3">
        <form action="./index.php" method="GET">
            <label for="password_lenght">lunghezza Password:</label>
            <input type="text" name="password_lenght" id="password_lenght">
            <button class="mx-2" type="submit">Genera</button>
        </form>
    </div>
    <div class="mt-5 p-3">
        <h5> <?php echo generatePassword($password_lenght) ?></h5>
    </div>
</body>
</html>