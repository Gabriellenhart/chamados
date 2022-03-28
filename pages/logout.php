<?php
include "../funcoes/function.php";

unset($_SESSION['usuario_logado']);

header('location:../pages/login.php');
?>
