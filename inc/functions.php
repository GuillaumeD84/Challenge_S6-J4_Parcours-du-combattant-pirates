<?php

session_start();

function random($min, $max) {
  return rand($min, $max);
}


/* Exo 1 */
define('NBTOFIND', random(0, 1000));

function isSecretNumber($number) {
  return $number === NBTOFIND;
}


/* Exo 2 */
function generateLogin () {
  $_logins = ['dario', 'lucie', 'god', 'jc', 'maxime', 'philippe', 'julien'];
  return $_logins[array_rand($_logins)] . random(1,100);
}
function generatePassword() {
  $pass = '';
  $_chars = 'abcdefghijklmnopqrstuvwxyz0123456789_';
  $count = strlen($_chars);
  for ($_ind = 0, $result = ''; $_ind < 8; $_ind++) {
    $index = rand(0, $count - 1);
    $pass .= substr($_chars, $index, 1);
  }
  return $pass;
}
function generateAccounts() {
  $results = [];
  for ($_ind=0; $_ind<20; $_ind++) {
    array_push($results, generateLogin().'/'.generatePassword());
  }
  return $results;
}
function randomAccount() {
  if (!isset($_SESSION['randomized'])) {
    $r = array_rand($_SESSION['accounts']);
    $account = $_SESSION['accounts'][$r];
    $_login = substr($account, 0, strpos($account, '/'));
    $_pass = substr($account, strpos($account, '/')+1);
    $_SESSION['randomized'] = sha1($_login.'_'.$_pass);
  }
}
if (!isset($_SESSION['accounts'])) $_SESSION['accounts'] = generateAccounts();
randomAccount();
$_SESSION['user'] = false;
function checkAccount($login, $password) {
  $_test = sha1($login.'_'.$password) === $_SESSION['randomized'];
  if (!$_SESSION['user']) $_SESSION['user'] = $_test;
  return $_test;
}


/* Exo 3 */
function etapeFinale($login, $password) {
  if (checkAccount($login, $password)) {
    $_SESSION['final'] = true;
  } else {
    $_SESSION['final'] = false;
  }
}
