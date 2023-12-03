<header>
    <h3>ATUALIZAR PUBLICAÇÃO</h3>
</header>

<?php

    $idAuthor = mysqli_real_escape_string($conection, $_POST["id"]);
    $name = mysqli_real_escape_string($conection, $_POST["name"]);
    $email = mysqli_real_escape_string($conection, $_POST["email"]);

    $sql = "UPDATE autor SET
        id = '{$idAuthor}',
        Autor = '{$name}',
        Email = '{$email}'
        WHERE id = '{$idAuthor}'
        ";
        mysqli_query($conection, $sql) or die("Erro ao executar a consulta". mysqli_error($conection));

        echo "O registro foi atualizado com sucesso!";

?>