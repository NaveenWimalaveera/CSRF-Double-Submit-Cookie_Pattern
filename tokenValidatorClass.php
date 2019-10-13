<?php
ob_start();
session_start();

if(isset($_POST['request']) && isset($_POST['token'])){

    if($_COOKIE['ssd_csrf'] == $_POST['token']){


        header("location:success.php?er=".$_POST['submit']."CSRF token matched ( Cookie == Hidden field) ( ".$_POST["token"]." ) == ( ".$_COOKIE['ssd_csrf']." )");

    }
    else {
        header("location:error.html?er=request validation failed!");
    }
}
else {
    header("location:error.html?er=something wrong ! :  invalid change state request!");
}
?>