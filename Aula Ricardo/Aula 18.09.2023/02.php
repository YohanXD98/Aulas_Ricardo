<?php
    if (isset($_COOKIE["Nome"]) &&isset ($_COOKIE["Idade"])) {
        $nome = $_COOKIE["Nome"];
        $idade =$_COOKIE["Idade"];
        echo "$nome tem $idade anos";
    }else {
        echo "Cookies não encontrados.";
    }

?>