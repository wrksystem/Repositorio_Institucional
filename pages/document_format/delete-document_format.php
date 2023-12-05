<header>
    <h3>EXCLUIR CATEGORIA</h3>
</header>
<?php
    $idCategory = mysqli_real_escape_string($conection, $_GET['id']);
    $sql = "DELETE FROM formatododocumento WHERE id = '{$idCategory}'";

    mysqli_query($conection, $sql) or die ("Erro ao excluir o registro. " . mysqli_error($conection));
    echo "Registro excluído com sucesso!";

?>