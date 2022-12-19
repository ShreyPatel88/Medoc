<?php


require_once "importance.php";


@session_destroy();


setcookie("emr-user", $token, time() - (60 * 60 * 24 * 7 * 30), "/", "", "", TRUE);


Config::redir("login.php");
