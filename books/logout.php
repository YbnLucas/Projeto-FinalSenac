<?php

session_start();
unset($_SESSION['USER_LOGIN']);
unset($_SESSION['name_login']);

header('location:index.html');

?>
