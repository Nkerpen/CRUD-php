<?php
//cabeçalho
include("blades/header.php");
?>

<div class="container border rounded mt-5 pt-3 ps-3 pb-3 pe-3 bg-white">
    <form action="../controllers/cadastrarAluno.php" method="post">
        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="alunoNome"><br>

        <label class="form-label">Cidade</label><br>
        <input class="form-control" type="text" name="alunoCidade"><br>

        <div class="my-3 row">
            <div class="my-3 col">
                <input class="form-check-input" type="radio" name="alunoSexo" value="M">
                <label class="form-label">Masculino</label>
            </div>
            <div class="my-3 col">
                <input class="form-check-input" type="radio" name="alunoSexo" value="F">
                <label class="form-label">Feminino</label>
            </div>
        </div>
        <input class="btn btn-success" type="submit" value="Cadastrar">
    </form>
</div>

<?php
//Rodapé
include("blades/footer.php");
?>