<?php
$sql = "SELECT
        id,
        upper(Categoria) AS Categoria
        FROM formatododocumento ORDER BY Categoria ASC
        ";
        $queryCategory = $conection->query($sql);
        $queryRs = $queryCategory->fetch_all(MYSQLI_ASSOC);

        foreach($queryRs as $q){
                if($data['FormatoDoDocumento_id'] == $q['id']){
                    echo "<option value='{$q['id']}' selected>{$q['Categoria']}</option>";
                }else{
                    echo "<option value='{$q['id']}'>{$q['Categoria']}</option>";
                }             
        }
?>