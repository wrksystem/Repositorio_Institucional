<header>
    <h3>ATUALIZAR CATEGORIA</h3>
</header>

<?php

    $idCategory = mysqli_real_escape_string($conection, $_POST["id"]);
    $category = mysqli_real_escape_string($conection, $_POST["category"]);

    $sql = "UPDATE formatododocumento SET
        id = '{$idCategory}',
        Categoria = '{$category}'
        WHERE id = '{$idCategory}'
        ";
        mysqli_query($conection, $sql) or die("Erro ao executar a consulta". mysqli_error($conection));

        echo "O registro foi atualizado com sucesso!";

?>