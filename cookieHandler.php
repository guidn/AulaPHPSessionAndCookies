<?php
if (isset($_COOKIE["connect"]) == "Logado") {                       
    header("Location: homepage.php");
}
if (isset($_COOKIE["await"])) {
    echo "<p>" . $_COOKIE["await"] . "</p>";

}
?>