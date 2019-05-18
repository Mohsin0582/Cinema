<?php
session_start();
unset($_session["message"]);
unset($_session["read"]);
session_destroy();
header("location: ../index.php");
?>