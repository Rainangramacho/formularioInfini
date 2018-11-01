<?php

$servidor = "127.0.0.1";
$nomeBD   = "web";
$usuario  = "root";
$senha    = "root";


//criando conexao
$mysqli = new mysqli($servidor, $usuario,$senha,$nomeBD);

//testando conexao com o banco de dados
if ($mysqli->connect_errno){
    echo "Falha ao conectar: {". $mysqli->connect_errno . "} " . $mysqli->connect_error;
}else {
    echo "Conectado com sucesso"; "<br>";
}



?>


<?php

$sql ="INSERT INTO funcionarios(id,nome,sobrenome) values('1','Britto','Timbalada')";
$resultado= mysqli_query($mysqli,$sql);




?>
