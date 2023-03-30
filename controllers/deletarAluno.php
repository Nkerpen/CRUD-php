<?php
include("../models/conexao.php");
$varIda = $_GET["ida"];

header("location:../index.php");
mysqli_query($conexao, "DELETE FROM alunos Where código = $varIda");
echo $_GET["ida"]

    ?>