<?php
session_start();
unset($_SESSION["studentid"]);
unset($_SESSION["login_admin"]);
unset($_SESSION["login_staff"]);
unset($_SESSION["remove"]);
unset($_SESSION["msg"]);
session_destroy();
header("Location:index.php");
?>