<?php
session_start();
unset($_SESSION['id_u']);
unset($_SESSION['email']);
session_destroy();
header("Location:connexion");
exit();
?>
    