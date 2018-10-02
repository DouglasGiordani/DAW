<?php
header('Access-Control-Allow-Origin: *');
//Alterar dados do user e password
$conn = mysqli_connect('localhost', 'root', '', 'imc');
$sql = "SELECT * FROM imc ORDER BY id"; //Limita até as primeiras cinco posições

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $jsonData = array();
    while ($array = mysqli_fetch_assoc($result)) {
        $jsonData[] = $array;
    }
    echo json_encode($jsonData);

    mysqli_close($conn); //Fecha a conexão
}
?>