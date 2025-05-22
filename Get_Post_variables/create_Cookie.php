<?php
$cookie_name = "user";
$cookie_value = "Yahoo Baba";

setcookie($cookie_name, $cookie_value, time()+ (86400 * 30),"/");



?>

<html>
    <body>
        <?php
      echo $_COOKIE[$cookie_name];
        ?>
    </body>
</html>