<header>
    <h3>ATUALIZAR AREA DO CONHECIMENTO</h3>
</header>

<?php

    $idKnowledgeAreas = mysqli_real_escape_string($conection, $_POST["id"]);
    $name = mysqli_real_escape_string($conection, $_POST["name"]);

    $sql = "UPDATE areasdoconhecimento SET
        idAreasDoConhecimento = '{$idKnowledgeAreas}',
        Nome = '{$name}'
        
        WHERE idAreasDoConhecimento = '{$idKnowledgeAreas}'
        ";
        mysqli_query($conection, $sql) or die("Erro ao executar a consulta". mysqli_error($conection));

        echo "O registro foi atualizado com sucesso!";

?>