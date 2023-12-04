
<?php
$sql = "SELECT
        idAreasDoConhecimento,
        upper(Nome) AS Nome
        FROM areasdoconhecimento ORDER BY Nome ASC
        ";
        $queryKnowledge = $conection->query($sql);
        $queryRs = $queryKnowledge->fetch_all(MYSQLI_ASSOC);

        foreach($queryRs as $q){
             echo "<option value='{$q['idAreasDoConhecimento']}'>{$q['Nome']}</option>";
             
        }
?>