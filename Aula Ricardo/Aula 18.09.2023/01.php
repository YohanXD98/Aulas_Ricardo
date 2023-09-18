<?php
    if (isset($_POST["Nome"])&&isset($_POST["idade"])) {
        $_nome = $_POST["Nome"];
        $idade = $_POST ["Idade"];

        setcookie("nome",$_nome,time() + 3600);
        setcookie("idade",$_idade,time()+ 3600);
        header("Location: 02.php");
    }else 
    {echo "preencha todos os campos do formulário.";
    }
?>