<?php
include_once('vendor/sonata-project/google-authenticator/src/FixedBitNotation.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php');

$g = new \Google\Authenticator\GoogleAuthenticator();

$secret = 'ASJDHJ4CKNXAJKC';

if(isset($_POST["token"])){
    $token = $_POST["token"];
    
    if($g->checkCode($secret, $token)){
        echo '<h1>ACESSO LIBERADO!</h1>';
    } else {
        echo '<h1>Tente novamente...</h1>';
    }
    die();
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Digite seu token</h1>
        <form method="post">
            <input type="text" name="token">
            <button type="submit">Validar</button>
        </form>
        
    </body>
</html>