<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Voc� n�o pode acessar esta p�gina porque n�o est� logado.<p><a href=\"index.php\">Entrar</a></p>");
}


?>