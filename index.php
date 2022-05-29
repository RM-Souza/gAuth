<?php
include_once('vendor/sonata-project/google-authenticator/src/FixedBitNotation.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php');

$g = new \Google\Authenticator\GoogleAuthenticator();

$secret = 'ASJDHJ4CKNXAJKC'

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>gAuth</title>
    </head>
    <body>
        <h1>Registre a Auth no Google Authenticator</h1>
        <img src="<?php echo $g->getUrl('Validation', 'projeto.com', $secret) ?>" /><br><br>
        <a href="login.html">LOGIN</a>
    </body>
</html>