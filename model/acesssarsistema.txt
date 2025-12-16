<?php
session_start();
$email = $_POST["cxemail"];
$senha = $_POST["cxsenha"];
if($email == "matheus@gmail.com" && $senha == "123")
{
    echo "
    <script>
    alert('Seja bem vindo');
    document.location.href = './view/index.html';
    </script>";
}
else{
    echo"<script>
    alert('Tenta outra vez');
    document.location.href = './view/index.html';
    </script>";
}

?>