<?php

$localhost = "localhost";
$user ="root";
$passw ="";
$banco ="loja";

$conecta = mysqli_connect($localhost, $user, $passw, $banco);

$sql = mysqli_query($conecta, "SELECT * FROM usuarios");

echo mysqli_num_rows($sql);

?>