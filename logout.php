<?php
setcookie('login', $login, time() -100);
setcookie('password', $password, time() -100);
header('Location: /index.php');
