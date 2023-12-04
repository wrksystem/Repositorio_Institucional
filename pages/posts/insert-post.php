<header>
    <h3>INSERIR PUBLICAÇÃO</h3>
</header>

<!--Segunda operação do banco de ados, que seria um CREATE do CRUD-->
<?php

    $title = mysqli_real_escape_string($conection, $_POST["title"]);
    $subtitle = mysqli_real_escape_string($conection, $_POST["subtitle"]);
    $publicationDate = mysqli_real_escape_string($conection, $_POST["publicationDate"]);
    $keyword = mysqli_real_escape_string($conection, $_POST["keywords"]);
    $link = mysqli_real_escape_string($conection, $_POST["link"]);
    $author = mysqli_real_escape_string($conection, $_POST["author"]);
    $knowledgeArea = mysqli_real_escape_string($conection, $_POST["knowledgeAreas"]);
    $email = mysqli_real_escape_string($conection, $_POST["email"]);
    //$category = mysqli_real_escape_string($conection, $_POST["category"]);

    
    $sql = "INSERT INTO iniciacaocientifica (
    Titulo,
    Subtitulo,
    DataDePublicacao,
    PalavraChave,
    Link,
    Autor,
    AreasDoConhecimento,
    Email       
    )
    VALUES(
        '{$title}',
        '{$subtitle}',
        '{$publicationDate}',
        '{$keyword}',
        '{$link}',
        '{$author}',
        '{$knowledgeArea}',
        '{$email}'
    )";
        
    mysqli_query($conection, $sql) or die("Erro ao executar a consulta". mysqli_error($conection));

    echo "O registro foi inserido com sucesso!";

?>