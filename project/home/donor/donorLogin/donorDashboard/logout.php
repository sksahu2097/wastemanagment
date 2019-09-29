<?php

	session_start();
    unset($_SESSION['username']);
    header('../donorLogin.html');

?>
