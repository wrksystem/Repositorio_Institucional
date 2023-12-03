<?php
$idKnowledgeAreas = $_GET['idAreasDoConhecimento'];
$sql = "SELECT * FROM areasdoconhecimento WHERE idareasdoconhecimento = {$idKnowledgeAreas}";
$result = mysqli_query($conection, $sql) or die ("Erro ao recuperar os dados. " . mysqli_error($conection));
$data = mysqli_fetch_assoc($result);
?>


<header>
    <h3>EDITAR AREA DO CONHECIMENTO</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menu=update-knowledge_areas" method="post" novalidate>
        
        <div class="row">
            <div class="mb-3 col-3">
                <label  class="form-label" for="id">ID</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                    <input class="form-control" type="text" name="id" value="<?= $data["idAreasDoConhecimento"] ?>">
                </div>            
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="name">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input class="form-control" type="text" name="name" value="<?= $data["Nome"] ?>">
                <div class="valid-tooltip">Está correto.</div>
                <div class="invalid-tooltip">Preenchimento obrigatório até 255 caracteres.</div>                
            </div>            
        </div>     
        
        <div class="mb-3">
            <input class="form-control btn btn-warning" type="submit" value="ATUALIZAR" name="btnUpdateContact">
        </div>
    </form>
</div>