<?php
$dbHost='localhost';
$dbUsername='root';
$dbPassword='alunolab';
$dbName='clinica1';
$conexao=new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($conexao->connect_errno) {
    die("Erro na conexão: " . $conexao->connect_error);
}

if (isset($_POST['submit'])) {

    $idpaciente = $_POST['idpaciente'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
   
    $sql = "INSERT INTO pacientes
            (idpaciente,nome,cpf,sexo,telefone,email,endereco)
            VALUES
            ($idpaciente, '$nome','$cpf','$sexo', '$telefone','$email', '$endereco',)";

    $result = mysqli_query($conexao, $sql);
    if ($result) {
        echo "Paciente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>