<header>
    <h3>ATUALIZAR PUBLICAÇÃO</h3>
</header>

<?php

    $idCadastro = mysqli_real_escape_string($conection, $_POST["idCadastro"]);
    $title = mysqli_real_escape_string($conection, $_POST["Titulo"]);
    $subtitle = mysqli_real_escape_string($conection, $_POST["Subtitulo"]);
    $publicationDate = mysqli_real_escape_string($conection, $_POST["DataDePublicacao"]);
    $keyword = mysqli_real_escape_string($conection, $_POST["PalavraChave"]);
    $link = mysqli_real_escape_string($conection, $_POST["Link"]);
    $author = mysqli_real_escape_string($conection, $_POST["Autor"]);
    $knowledgeArea = mysqli_real_escape_string($conection, $_POST["AreasDoConhecimento"]);
    $category = mysqli_real_escape_string($conection, $_POST["Categoria"]);

    $sql = "UPDATE iniciacaocientifica SET
        Titulo = '{$title}',
        Subtitulo = '{$subtitle}',
        DataDePublicacao = '{$publicationDate}',
        PalavraChave = '{$keyword}',
        Categoria = '{$category}',    
        Link = '{$link}',
        Autor = '{$author}',
        AreasDoConhecimento = '{$knowledgeArea}'
        WHERE idCadastro = '{$idCadastro}'
        ";
        mysqli_query($conection, $sql) or die("Erro ao executar a consulta". mysqli_error($conection));

        echo "O registro foi atualizado com sucesso!";

?>