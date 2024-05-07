<?php 
    // funzione di controllo
    /* function mail_verification($email){
        if($email === null){
            echo 'inserisci una mail';
        } else {
            if(str_contains($email, '@') && str_contains($email, '.')){
                return true;
            } else {
                return false;
            }
        }
    }; */

    function mail_verification($email){
        if (str_contains($email, '@') && str_contains($email, '.')) {
            return true;
        } else {
            return false;
        }
    };

    // funzione per stampa messaggio
    /* function stampa_alert($emailVerificationResult){
        if($emailVerificationResult === true){
            echo '<div class="alert alert-success" role="alert">
                    Your mail is valid, welcome to our news letter!
                  </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Your mail not contains . or @ try again!
                  </div>';
        }
    } */

?>