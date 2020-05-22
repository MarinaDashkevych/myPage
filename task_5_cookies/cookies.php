<?php

echo time();

setcookie('my_cookie', 'hello', time() + 60 * 60 * 24);
var_dump($_COOKIE);

?>