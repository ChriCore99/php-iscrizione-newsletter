<?php
    $email = $_POST['email'];

    var_dump($email);

    function mail_verification(){
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <!-- input della mail -->
        <div>
            <input type="email" name="email" id="email" placeholder="inserisci una mail">
        </div>
        <!-- button invio dati -->
        <div>
            <button>invia</button>
        </div>
    </form>
</body>
</html>