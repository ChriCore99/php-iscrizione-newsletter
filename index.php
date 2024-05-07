<?php
include __DIR__ . '/utilities.php';

$email = $_POST['email'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form class="text-center" action="" method="POST">
        <!-- input della mail -->

        <input type="text" name="email" id="email" placeholder="inserisci una mail">
        <!-- button invio dati -->
        <button class="btn btn-primary">invia</button>
    </form>

    <div>
        <?php /* stampa_alert(
            mail_verification($email) 
        ) */ ?>

        <?php if ($email === null) { ?>
            <div>
                inserisci una mail
            </div>
        <?php } elseif (mail_verification($email)) { ?>
            <div class="alert alert-success" role="alert">
                Your mail is valid, welcome to our news letter!
            </div>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                Your mail not contains . or @ try again!
            </div>
        <?php } ?>

    </div>
</body>

</html>