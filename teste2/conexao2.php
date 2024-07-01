<?php
$servidor  = '127.0.0.1';
$usuario = 'root';
$senha = '';
$bancoDados = 'teste';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados);

if(mysqli_connect_errno($conexao)){
    echo "problemas para conectar no banco, verifique os dados";
} else {
    echo "conexão realizada com sucesso";
}

?>
