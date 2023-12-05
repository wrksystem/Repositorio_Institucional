<header>
    <h3><i class="bi bi-book"></i> CADASTRAR PUBLICAÇÃO</h3>
</header>
<div>
    <form action="index.php?menu=insert-post" method="post">
        
        <div class="mb-3">
            <label class="form-label" for="title">Titulo</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <input class="form-control" type="text" name="title">
            </div>
        </div>

        <div class="mb-3 allign-center">
            <label class="form-label" for="subtitle">Subtitulo</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <input class="form-control" type="text" name="subtitle">
            </div>
        </div>                
    
        <div class="row container">
            <div class="mb-3 coll">
                <label class="form-label" for="publicationDate">Data de Publicação</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    <input class="form-control" type="date" name="publicationDate">
                </div>
            </div>

            <div class="mb-3 coll">
                <label class="form-label" for="keywords">Palavra Chave</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input class="form-control" type="text" name="keywords">
                </div>
            </div>    
        
            <div class="mb-3 coll">
                <label class="form-label" for="author">Selecione o Autor</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                    <select class="form-select form-control" name="author" id="author">
                        <?php
                        include("pages/authors/select-author.php");
                        ?>
                    </select>
                </div>
            </div>
            
            <div class="mb-3 coll">
                <label class="form-label" for="knowledgeAreas">Selecione a Area De Conhecimento</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-list"></i></span>
                    <select class="form-select form-control" name="knowledgeAreas" id="knowledgeAreas">
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
                <select class="form-select form-control" name="category" id="category">
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
                <input class="form-control" type="text" name="link">
            </div>
        </div>

        <div class="mb-3">
            <input class="btn btn-success form-control" type="submit" value="ADICIONAR" name="btnAdicionar">
        </div>
    </form>
</div>