
<?php
$sql = "SELECT
        id,
        upper(Autor) AS Autor
        FROM autor ORDER BY Autor ASC
        ";
        $queryAuthor = $conection->query($sql);
        $queryRs = $queryAuthor->fetch_all(MYSQLI_ASSOC);

        foreach($queryRs as $q){
                echo "<option value='{$q['id']}'>{$q['Autor']}</option>";
             
        }
?>