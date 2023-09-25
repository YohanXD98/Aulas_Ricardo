EXERCICIO3:

areaprivada.php

<?php

session_start();



if ($_SESSION["logou"] != 1) {

   header("Location: login.html");

   exit();

}

?>



<!DOCTYPE html>

<html>

<head>

   <title>Área Privada</title>

</head>

<body>

   <h2>Área Privada</h2>

   <p>Bem-vindo à área privada!</p>

</body>

</html>



login.html

<!DOCTYPE html>

<html>

<head>

   <title>Área Privada</title>

</head>

<body>

   <h2>Área Privada</h2>

   <form method="post" action="login.php">

     <label for="username">Usuário:</label>

     <input type="text" name="username" id="username" required><br><br>

     <label for="password">Senha:</label>

     <input type="password" name="password" id="password" required><br><br>

     <input type="submit" value="Entrar">

   </form>

</body>

</html>



login.php

<?php

session_start();



$loginPadrao = "usuario";

$senhaPadrao = "senha";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST["username"];

  $password = $_POST["password"];



   if ($username === $loginPadrao && $password === $senhaPadrao) {

    $_SESSION["logado!"] = 1;

     

     header("Location: areaprivada.php");

     exit();

  }

else {

     echo "Dados de login errados, tente novamente.";

     header("Location: login.html");

     exit();

  }

}

?>



exercicio em sala:

<!DOCTYPE html>

<html>

<head>

   <title>Encontre o Maior Número</title>

</head>

<body>

   <h1>Encontre o Maior Número</h1>

   <form method="post" action="">

    Digite o 1 número: <input type="text" name="numero1"><br>

    Digite o 2 número: <input type="text" name="numero2"><br>

     <input type="submit" value="Encontrar Maior Número">

   </form>

</body>

</html>



   <?php

   function encontrarMaiorNumero($num1, $num2) {

     if ($num1 > $num2) {

       return $num1;

    } else {

       return $num2;

    }

  }



   if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST["numero1"];

    $numero2 = $_POST["numero2"];



    $maiorNumero = encontrarMaiorNumero($numero1, $numero2);



     echo "O maior número digitado é: " . $maiorNumero;

  }

  ?>