<?php
session_start();
$_SESSION["nombre"] = "Juan";
echo "Hola, " . $_SESSION["nombre"];
?>
