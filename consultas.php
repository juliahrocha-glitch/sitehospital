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

    $idconsulta = $_POST['idconsulta'];
    $paciente = $_POST['paciente'];
    $medico = $_POST['medico'];
    $dataa = $_POST['dataa'];
    $horario = $_POST['horario'];
    $especialidade = $_POST['especialidade'];
    $tipo_consulta = $_POST['tipo_consulta'];
    $status_consulta = $_POST['status_consulta'];
    $observacoes = $_POST['observacoes'];
   

    $sql = "INSERT INTO consultas
            (idconsulta,paciente,medico,dataa,horario,especialidade,tipo_consulta,status_consulta,observacoes)
            VALUES
            ($idconsulta, '$paciente','$medico','$dataa','$horario', '$especialidade','$tipo_consulta','$status_consulta','$observacoes')";

    $result = mysqli_query($conexao, $sql);
    if ($result) {
        echo "Consulta agendada com sucesso!";
    } else {
        echo "Erro ao agendar: " . mysqli_error($conexao);
    }
}
?>