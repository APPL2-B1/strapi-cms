<?php
session_start();
$default_lang = 'lang_indonesian';
if(isset($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];
  // header("Location: index.php");
  header('Location: '.$_SERVER['PHP_SELF']);
  // header('Location: '.$_SERVER['REQUEST_URI']);
  // $self = $_SERVER['REQUEST_URI'];
  // header('Location:'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
}

// if(isset($_SESSION['lang'])) {
//   $_SESSION['lang'] = $default_lang;
// }
if(!$_SESSION['lang']) {
  $_SESSION['lang'] = $default_lang;
}
include 'language/' . $_SESSION['lang'] . '.php';

?>