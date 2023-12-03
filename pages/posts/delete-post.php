<header>
    <h3>EXCLUIR PUBLICAÇÃO</h3>
</header>
<?php
    $idRegister = mysqli_real_escape_string($conection, $_GET['idCadastro']);
    $sql = "DELETE FROM iniciacaocientifica WHERE idCadastro = '{$idRegister}'";

    mysqli_query($conection, $sql) or die ("Erro ao excluir o registro. " . mysqli_error($conection));
    echo "Registro excluído com sucesso!";

?>