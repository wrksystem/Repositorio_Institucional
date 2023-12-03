<?php
$idRegister = $_GET['idCadastro'];
$sql = "SELECT * FROM iniciacaocientifica WHERE idCadastro = {$idRegister}";
$result = mysqli_query($conection, $sql) or die ("Erro ao recuperar os dados. " . mysqli_error($conection));
$data = mysqli_fetch_assoc($result);
?>


<header>
    <h3>EDITAR PUBLICAÇÃO</h3>
</header>
<div>
    <form action="index.php?menu=edit-post" method="post">
        <div class="mb-3">
            <label class="form-label" for="title">Titulo</label>
            <input class="form-control" type="text" name="titulo" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="subtitle">Subtitulo</label>
            <input class="form-control" type="text" name="subtitulo" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="publicationDate">Data de Publicação</label>
            <input class="form-control" type="date" name="" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="keywords">Palavra Chave</label>
            <input class="form-control" type="text" name="keywords" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="link">Link</label>
            <input class="form-control" type="text" name="link" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="author">Autor</label>
            <input class="form-control" type="text" name="author" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="knowledgeAreas">Areas do Conhecimento</label>
            <input class="form-control" type="text" name="knowledgeAreas" required>
        </div>
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="ATUALIZAR" name="btnAtualizar+">
        </div>
    </form>
</div>