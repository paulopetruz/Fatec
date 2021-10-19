<?php
/* Conexão com o banco de dados */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'escola');
 
/* tentativa de conectar no banco de dados */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// teste de conexão
if($link === false){
    die("ERRO: Não consegui conectar no banco de dados. " . mysqli_connect_error());
}else{
    echo("");
}
?>