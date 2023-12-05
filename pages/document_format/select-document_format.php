<?php
$sql = "SELECT
        id,
        upper(Categoria) AS Categoria
        FROM formatododocumento ORDER BY Categoria ASC
        ";
        $queryCategory = $conection->query($sql);
        $queryRs = $queryCategory->fetch_all(MYSQLI_ASSOC);

        foreach($queryRs as $q){
                echo "<option value='{$q['id']}'>{$q['Categoria']}</option>";
             
        }
?>