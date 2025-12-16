<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <title> smartagri</title>
</head>
<body> <center><div> 
<h1> Consulta de Cadastro </h1>

<?php


include_once "conexao.php"; // trazer a conexão 

    $email = $_POST['cxemail']; // vai receber o que vem da caixinha pesquisa
    $consulta = "select * from Usuario where emailUsuario = '$email'"; // essa var vai receber o select 

    $executar = mysqli_query($conn, $consulta); 
// o que faz execeutar a var consulta / ela precisa de dois parametros, onde ta o banco e a instrucao sql 
    $linha = mysqli_fetch_array($executar); 
// vai pegar todos os dados do executar 
// mysqli_fetch_array($executar); vai criar uma matriz e jogar na memoria do pc para organizacao de dados recebida do excutar

?>
<div class="Cliente">
    <h3>Nome:</h3> 
    <input type = "text" value = "<?php echo $linha['nomeUsuario']; ?>"/> <br><br><br>
<!-- exibe o conteudo do campo nome que foi organizado pela var $linha -->

    <h3>Email:</h3>
    <input type = "text" value = "<?php echo $linha['emailUsuario']; ?>"/><br><br><br> 
<!-- exibe o conteudo do campo email que foi organizado pela var $linha -->
<center>
    <a class="excluir" href="excluirClie.php?id=<?php echo $linha["cod"]; ?>">Excluir</a>
<!-- exibe o botão excluir quando for clicado, levará o usuário a página excluiraluno.php, além de atribuir o conteudo do campo cod_aluno na var id -->
</center><br><br>
    <a href="alterClie.php?id=<?php echo $linha["cod"]; ?>">Alterar</a>
</center></div></body>
</html>