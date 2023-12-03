<header>
    <h3>EXCLUIR AREA DO CONHECIMENTO</h3>
</header>
<?php
    $idKnowledgeAreas = mysqli_real_escape_string($conection, $_GET['idAreasDoConhecimento']);
    $sql = "DELETE FROM areasdoconhecimento WHERE idAreasDoConhecimento = '{$idKnowledgeAreas}'";

    mysqli_query($conection, $sql) or die ("Erro ao excluir o registro. " . mysqli_error($conection));
    echo "Registro excluído com sucesso!";

?>