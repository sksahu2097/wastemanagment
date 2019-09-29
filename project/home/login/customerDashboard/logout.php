<?php

	session_start();
    unset($_SESSION['username']);
    header('login1.html');

?>
