<!DOCTYPE html>

<html>
<head>
   <title>formulário</title>
</head>
<body>
   <form action="processar.php" method="post">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
     <input type="submit" value="Enviar">
   </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nome = $_POST["nome"];
  $idade = $_POST["idade"];

   setcookie("nome", $nome, time() + 3600);
   setcookie("idade", $idade, time() + 3600);

   header("Location: exibir.php");

   exit();

}

?>