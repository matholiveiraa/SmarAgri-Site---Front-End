<?php 
if($_POST['cxnome'] != "" && $_POST['cxemail'] != "" && $_POST['cxsenha'] != ""){
    include_once("conexao.php");

    $nome = $_POST['cxnome'];
    $email = $_POST['cxemail'];
    $senha = $_POST['cxsenha'];
    $telefone = $_POST['cxtelefone'];
    $cpf = $_POST['cxcpf'];
    $cep = $_POST['cxcep'];
    $casa = $_POST['cxcasa'];
    $complemento = $_POST['cxcomplemento'];


    $sql = "insert into Usuario (nomeUsuario, emailUsuario, senhaUsuario, celUsuario, cpfUsuario, cepUsuario, casaUsuario, complemUsuario) 
    values ('$nome', '$email', '$senha', '$telefone', '$cpf', '$cep', '$casa', '$complemento');";

    $query = mysqli_query($conn, $sql);


    echo "Cliente cadastrado.</br>";
    echo "<a href='../view/index.php''>Voltar</a>";

    
}
else{

    echo "Tente outra vez</br>";
    echo "<a href='../view/index.php'>Voltar</a>";
}
        
?>