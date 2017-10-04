# token

Make sure you have composer installed and run the following command
composer require firebase/php-jwt

genSecret.php generates a new secret for you to use in production. This must be pasted in the config/config.php as the secret token.
Run index.php first to get the token and paste it into
$jwt in check_token.php within 5 mins after generating it, to validate the jwt.
you can also change the secret by regenerating it using genSecret.php
