<?php
    $email = $_POST['email'];

    function mail_verification($email){
        if(str_contains($email, '@') && str_contains($email, '.')){
            echo 'your mail is valid, welcome to our news letter!';
        } else {
            echo 'your mail not contains @ or . try again';
        }
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

    <div>
        <?php echo mail_verification($email) ?>
    </div>
</body>
</html>