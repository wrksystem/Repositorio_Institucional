
<header>
    <h3><i class="bi bi-book"></i> CADASTRAR PUBLICAÇÃO</h3>
</header>
<div>
    <form action="index.php?menu=insert-post" method="post">
        <div class="mb-3">
            <label class="form-label" for="title">Titulo</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label" for="subtitle">Subtitulo</label>
            <input class="form-control" type="text" name="subtitle">
        </div>
        <div class="mb-3">
            <label class="form-label" for="publicationDate">Data de Publicação</label>
            <input class="form-control" type="date" name="publicationDate">
        </div>
        <div class="mb-3">
            <label class="form-label" for="keywords">Palavra Chave</label>
            <input class="form-control" type="text" name="keywords">
        </div>        
        <div class="mb-3">
            <label class="form-label" for="author">Selecione o Autor</label>
            <select class="form-select" name="author" id="author">
                <?php
                include("pages/authors/select-author.php");
                ?>
            </select>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="knowledgeAreas">Selecione a Area De Conhecimento</label>
            <select class="form-select" name="knowledgeAreas" id="knowledgeAreas">
                <?php
                include("pages/knowledge_areas/select-knowledgeAreas.php");
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">E-mail</label>
            <input class="form-control" type="text" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="link">Link</label>
            <input class="form-control" type="text" name="link">
        </div>

        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="ADICIONAR" name="btnAdicionar">
        </div>
    </form>
</div>