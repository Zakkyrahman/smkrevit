<?php 

    $cookie_name = 'user';
    $cookie_value = 'zakky';

    setcookie($cookie_name, $cookie_value);

    $cookie_value = 'rahman';

    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name];

    setcookie("user", "", time() - 3600);

    echo '</br>';

    var_dump($_COOKIE);

?>