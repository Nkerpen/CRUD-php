<?php
include("../models/conexao.php");
//cabeçalho
include("blades/header.php");
?>

<?php
$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE código = 1");
$exibe = mysqli_fetch_array($query);


?>

<div class="container border rounded mt-5 pt-3 ps-3 pb-3 pe-3 bg-white">
    <form action="../controllers/cadastrarAluno.php" method="post">
        <input class="form-control" type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>

        <label class="form-label">Cidade</label><br>
        <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>

        
        <label class="form-label">Masculino</label>
        <input class="form-check-input" type="radio" name="alunoSexo" value="M" <?php echo ($exibe[3] == "M") ? "cheked" : ""; ?>>
        
        <label class="form-label">Feminino</label>
        <input class="form-check-input" type="radio" name="alunoSexo" value="F" <?php echo ($exibe[3] == "F") ? "cheked" : ""; ?>><br>

        <input class="btn btn-success" type="submit" value="Atualizar">
    </form>
</div>
    <?php
    //Rodapé
    include("blades/footer.php");
    ?>