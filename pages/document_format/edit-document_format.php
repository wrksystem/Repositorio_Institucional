<?php
$idDocumentFormat = $_GET['id'];
$sql = "SELECT * FROM formatododocumento WHERE id = {$idDocumentFormat}";
$result = mysqli_query($conection, $sql) or die ("Erro ao recuperar os dados. " . mysqli_error($conection));
$data = mysqli_fetch_assoc($result);
?>


<header>
    <h3>EDITAR CATEGORIA</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menu=update-document_format" method="post" novalidate>
        
        <div class="row">
            <div class="mb-3 col-3">
                <label  class="form-label" for="id">ID</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                    <input class="form-control" type="text" name="id" value="<?= $data["id"] ?>">
                </div>            
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="category">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-pencil"></i></span>
                <input class="form-control" type="text" name="category" value="<?= $data["Categoria"] ?>">
                <div class="valid-tooltip">Está correto.</div>
                <div class="invalid-tooltip">Preenchimento obrigatório até 255 caracteres.</div>                
            </div>            
        </div>         
        
        <div class="mb-3">
            <input class="form-control btn btn-warning" type="submit" value="ATUALIZAR" name="btnUpdateContact">
        </div>
    </form>
</div>