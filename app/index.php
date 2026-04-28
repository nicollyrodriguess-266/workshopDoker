<?php

echo "<h1>Docker funcionando </h1>";



$host = 'db';

$user = 'root';

$pass = '1234';

$db = 'meubanco';



$conn = new mysqli($host, $user, $pass, $db);



if ($conn->connect_error) {

  	die("Erro: " . $conn->connect_error);

}



echo "Conectado ao banco!";

?>