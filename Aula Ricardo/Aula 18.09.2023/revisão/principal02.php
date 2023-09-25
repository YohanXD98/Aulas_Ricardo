<!DOCTYPE html>

<html>
    <head>
   <title>Formulário</title>
</head>
        <body>
            <h1>Preencha os seus dados</h1>
            <form action="cria_cookies.php" method="GET">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br><br>
            <label for="cidade">Cidade de Nascimento:</label>
             <input type="text" name="cidade" id="cidade" required><br><br>
            <input type="submit" value="Enviar">
            </form>
        </body>
</html>




<?php

if (isset($_COOKIE["nome"]) && isset($_COOKIE["cidade"])) {
  $nome = $_COOKIE["nome"];
  $cidade = $_COOKIE["cidade"];

   echo " $nome nasceu em $cidade.";
} 
else {
   echo "Dados não encontrados.";
}
?>

