<header>
    <h3>INSERIR AUTOR</h3>
</header>

<!--Segunda operação do banco de ados, que seria um CREATE do CRUD-->
<?php

    $name = mysqli_real_escape_string($conection, $_POST["name"]);
    $email = mysqli_real_escape_string($conection, $_POST["email"]);
    
    $sql = "INSERT INTO autor (
        Autor, 
        Email) 
        VALUES (
            '$name',
            '$email')
        ";
        
    mysqli_query($conection, $sql) or die("Erro ao executar a consulta". mysqli_error($conection));

    echo "O registro foi inserido com sucesso!";

?>