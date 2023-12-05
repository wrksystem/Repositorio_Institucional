<header>
    <h3>INSERIR CATEGORIA</h3>
</header>

<!--Segunda operação do banco de ados, que seria um CREATE do CRUD-->
<?php

    $category = mysqli_real_escape_string($conection, $_POST["category"]);
    
    $sql = "INSERT INTO formatododocumento ( 
        Categoria) 
        VALUES (
            '$category')
        ";
        
    mysqli_query($conection, $sql) or die("Erro ao executar a consulta". mysqli_error($conection));

    echo "O registro foi inserido com sucesso!";

?>