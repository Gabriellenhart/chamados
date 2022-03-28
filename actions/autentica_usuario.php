<?php
include '../funcoes/functions.php';

if(strtolower($_POST['login']) == 'admin' && $_POST['password'] == '1234') {
  $_SESSION['usuario_logado'] = 'admin';
  header('location:../index.php');
} else{
//  die('Login inválido');
  header('location:../pages/login.php');
} ?>
