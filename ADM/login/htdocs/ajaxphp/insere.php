<?php
header('Access-Control-Allow-Origin: *');
$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING); 
$alt = filter_input(INPUT_POST,'altura',FILTER_SANITIZE_STRING); 
$peso = filter_input(INPUT_POST,'peso',FILTER_SANITIZE_STRING); 
$imc = filter_input(INPUT_POST,'imc',FILTER_SANITIZE_STRING);
if ($imc<18.5){
	$Classificao="Abaixo do Peso";
}
if ($imc>=18.6 && $imc<=24.9){
	$Classificao="Peso ideal";
}
if ($imc>=25 && $imc<=29.9){
	$Classificao="levemente acima do pesso";
}
if ($imc>=30 && $imc<=34.9){
	$Classificao="Obesidade  grau 1";
}
if ($imc>=35 && $imc<=39.9){
	$Classificao="Obesidade grau 2";
}
if ($imc>40){
	$Classificao="Obesidade grau 3";
}
if ($name && $alt && $peso  && $imc) {
    $conn = mysqli_connect('localhost', 'root', '', 'imc');

    $sql = "INSERT INTO imc(name,altura,peso,imc,classificao) VALUES('$name',$alt,$peso,$imc,'$Classificao')";

    $resultado = mysqli_query($conn, $sql);

    
    if ($resultado != null){
        $mensagem = "Tabela Atualizada!!";
    }else{
        $mensagem = "Erro ao inserir dados!!";
    }
}else {
    $mensagem = "Informe todos os campos!!";
}
echo $mensagem;
?>