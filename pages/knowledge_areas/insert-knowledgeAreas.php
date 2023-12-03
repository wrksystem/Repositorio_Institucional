<header>
    <h3>INSERIR AREA DO CONHECIMENTO</h3>
</header>

<!--Segunda operação do banco de ados, que seria um CREATE do CRUD-->
<?php

    $name = mysqli_real_escape_string($conection, $_POST["name"]);
    
    $sql = "INSERT INTO areasdoconhecimento (
        Nome) 
        VALUES (
            '$name')
        ";
        
    mysqli_query($conection, $sql) or die("Erro ao executar a consulta". mysqli_error($conection));

    echo "O registro foi inserido com sucesso!";

?>