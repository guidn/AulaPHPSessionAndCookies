<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario != "user" && $senha != "pass")
{
    setcookie("await", "Acesso Negado", time() + (15));
    header("Location: index2.php");
}
else
{  
    setcookie("connect", "Logado", time() + (15));
    header("Location: homepage.html");
}