<?php

if(!session_id()) session_start();
require_once "../app/init.php";

var_dump($_SESSION['login']);

if (!$_SESSION['login'] || $_SESSION['login'] == null) {
    // header("location:".BASEURL."/auth/index");
    // die;
}


$app = new App;
