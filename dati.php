<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
            <nav id="navbar">
                <ul>
                    <i class="fas fa-bars" id="menuToggle"></i>
                    <li><a href="index.html">Home</a></li>
                    <li> <a href="#">Articoli</a></li>
                    <li><a href="#">Contatti</a></li>
                </ul>
            </nav>
        </header>
    <div id="benvenuto">
        Thanks for your sub!
    </div>
</body>
</html>
<?php
//validare i dati

if(!empty($_GET['nome'] && !empty($_GET['cognome']))){
    $nome = $_GET['nome'];
    $cognome = $_GET['cognome'];
};

if(!empty($_GET['email'])){
    $email = $_GET['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $destinatario ='s.dellaspora@outlook.com';
        $oggetto ='Oggetto';
        $corpo ='Ciao come stai?';
        $headers = 'From: laragon@epicode.test' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"  . 'X-Mailer:PHP' . phpversion();

        mail($destinatario,$oggetto,$corpo,$headers);
    }else{
        echo 'indirizzo email invalid';
    }
};
?>