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

    $idexame = $_POST['idexame'];
    $nome = $_POST['nome'];
    $tipo_exame = $_POST['tipo_exame'];
    $dataa = $_POST['dataa'];
    $paciente = $_POST['paciente'];
    $medico = $_POST['medico'];
    $resultado = $_POST['resultado'];
    $observacoes = $_POST['observacoes'];  

    $sql = "INSERT INTO exames
            (idexame,nome,tipo_exame,dataa,paciente,medico,resultado,observacoes)
            VALUES
            ($idexame, '$nome','$tipo_exame','$dataa','$paciente', '$medico','$resultado','$observacoes')";

    $result = mysqli_query($conexao, $sql);
    if ($result) {
        echo "Exame agendado com sucesso!";
    } else {
        echo "Erro ao agendar: " . mysqli_error($conexao);
    }
}
?>