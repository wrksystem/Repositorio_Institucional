<header>
    <h3>EXCLUIR AUTOR</h3>
</header>
<?php
    $idAuthor = mysqli_real_escape_string($conection, $_GET['id']);
    $sql = "DELETE FROM autor WHERE id = '{$idAuthor}'";

    mysqli_query($conection, $sql) or die ("Erro ao excluir o registro. " . mysqli_error($conection));
    echo "Registro excluído com sucesso!";

?>