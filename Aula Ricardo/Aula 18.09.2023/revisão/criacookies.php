<?php

if (isset($_GET["nome"]) && isset($_GET["cidade"])) {
  $nome = $_GET["nome"];
  $cidade = $_GET["cidade"];

   setcookie("nome", $nome, time() + 3600, "/");
   setcookie("cidade", $cidade, time() + 3600, "/");

   header("location: mensagem.php");

} 
else {
   echo "preencha tudo antes de finalizar.";
}

?>