<?php
$idRegister = $_GET['idCadastro'];
$sql = "SELECT * FROM iniciacaocientifica WHERE idCadastro = {$idRegister}";
$result = mysqli_query($conection, $sql) or die ("Erro ao recuperar os dados. " . mysqli_error($conection));
$data = mysqli_fetch_assoc($result);
?>


<header>
    <h3><i class="bi bi-book"></i> ATUALIZAR PUBLICAÇÃO</h3>
</header>
<div>
    <form action="index.php?menu=update-post" method="post">

        <div class="mb-3">
            <label class="form-label" for="id">ID</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
                <input class="form-control" type="text" name="id" value="<?= $data['idCadastro'] ?>">
            </div>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="title">Titulo</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <input class="form-control" type="text" name="title" value="<?= $data['Titulo'] ?>">
            </div>
        </div>

        <div class="mb-3 allign-center">
            <label class="form-label" for="subtitle">Subtitulo</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <input class="form-control" type="text" name="subtitle" value="<?= $data['Subtitulo'] ?>">
            </div>
        </div>                
    
        <div class="row container">
            <div class="mb-3 coll-3">
                <label class="form-label" for="publicationDate">Data de Publicação</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    <input class="form-control" type="date" name="publicationDate" value="<?= $data['DataDePublicacao'] ?>">
                </div>
            </div>

            <div class="mb-3 coll-3">
                <label class="form-label" for="keywords">Palavra Chave</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input class="form-control" type="text" name="keywords" value="<?= $data['PalavraChave'] ?>">
                </div>
            </div>    
        
            <div class="mb-3 coll-3">
                <label class="form-label" for="author">Selecione o Autor</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                    <select class="form-select form-control" name="author" id="author" value="<?= $data['Autor_id'] ?>">
                        <?php
                        include("pages/authors/select-author.php");
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="mb-3 coll-3">
                <label class="form-label" for="knowledgeAreas">Selecione a Area De Conhecimento</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-list"></i></span>
                    <select class="form-select form-control" name="knowledgeAreas" id="knowledgeAreas" value="<?= $data['AreasDoConhecimento_idAreasDoConhecimento'] ?>">
                        <?php
                        include("pages/knowledge_areas/select-knowledgeAreas.php");
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="category">Selecione a Categoria</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-list"></i></span>
                <select class="form-select form-control" name="category" id="category" value="<?= $data['FormatoDoDocumento_id'] ?>">
                    <?php
                    include("pages/document_format/select-document_format.php");
                    ?>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="link">Link</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                <input class="form-control" type="text" name="link" value="<?= $data['Link'] ?>">
            </div>
        </div>

        <div class="mb-3">
            <input class="btn btn-success form-control" type="submit" value="ADICIONAR" name="btnAdicionar">
        </div>
    </form>
</div>