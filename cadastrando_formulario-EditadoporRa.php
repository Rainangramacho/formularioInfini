<?php
include 'conexao_banco.php';

?>

<?php

$pergunta1=     $_POST["pergunta1"];
$pergunta2=     $_POST["pergunta2"];
$pergunta3=     $_POST["pergunta3"];
$pergunta4=     $_POST["pergunta4"];
$pergunta5=     $_POST["pergunta5"];
$pergunta6=     $_POST["pergunta6"];
$pergunta7=     $_POST["pergunta7"];
$pergunta8=     $_POST["pergunta8"];
$pergunta9=     $_POST["pergunta9"];
$pergunta10=    $_POST["pergunta10"];


$justificativa3=    $_POST["Justificativa3"];
$justificativa4=    $_POST["Justificativa5"];
$justificativa5=    $_POST["Justificativa5"];
$justificativa6=    $_POST["Justificativa6"];
$justificativa7=    $_POST["Justificativa7"];
$justificativa8=    $_POST["Justificativa8"];
$justificativa9=    $_POST["Justificativa9"];
$justificativa10=   $_POST["Justificativa10"];



$cont=0;
IF($pergunta1 == 'NAO'){
    $cont++;
}ELSE {
}
IF($pergunta2 == 'NAO'){
    $cont++;
}ELSE {
}
IF($pergunta3 == 'NAO'){
    $cont++;
}ELSE {
}

IF($pergunta4 == 'SIM'){
    $cont++;
}ELSE {
}

IF($pergunta5 == 'EXC'){
    $cont++;
}ELSE {
}

IF($pergunta6 == 'SIM'){
    $cont++;
}ELSE {
}
IF($pergunta7 == 'SIM'){
    $cont++;
}ELSE {
}
IF($pergunta8 == 'SIM'){
    $cont++;
}ELSE {
}
IF($pergunta9 == 'SIM'){
    $cont++;
}ELSE {
}
IF($pergunta10 == 'DIFERE'){
    $cont++;
}ELSE {
}


echo "Formulário respondido com sucesso!";
$b=$_POST["func"];
$c=$_POST["setor"];
$d=$_POST["super"];



$sql ="INSERT INTO funcionarios (nome_funcionario,setor_funcionario,supervisor,pergunta1,pergunta2,pergunta3,pergunta4,pergunta5,pergunta6,pergunta7,pergunta8,pergunta9,pergunta10,justificativa3,
justificativa4,justificativa5,justificativa6,justificativa7,justificativa8,justificativa9,justificativa10,resultado) VALUES ('$b','$c','$d','$pergunta1','$pergunta2','$pergunta3','$pergunta4','$pergunta5','$pergunta6',
'$pergunta7','$pergunta8','$pergunta9','$pergunta10','$justificativa3','$justificativa4','$justificativa5','$justificativa6','$justificativa7','$justificativa8','$justificativa9','$justificativa10','$cont')";


$resultado= mysqli_query($mysqli,$sql);



$sqli = "SELECT * FROM funcionarios";
$query = mysqli_query($mysqli,$sqli);
while($sqli = mysqli_fetch_array($query)){
    $id = $sqli["id"];
    $nome = $sqli["nome_funcionario"];

}

?>





