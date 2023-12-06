
<?php
$sql = "SELECT
        idAreasDoConhecimento,
        upper(Nome) AS Nome
        FROM areasdoconhecimento ORDER BY Nome ASC
        ";
        $queryKnowledge = $conection->query($sql);
        $queryRs = $queryKnowledge->fetch_all(MYSQLI_ASSOC);

        foreach($queryRs as $q){
                if($data['AreasDoConhecimento_idAreasDoConhecimento'] == $q['idAreasDoConhecimento']){
                    echo "<option value='{$q['idAreasDoConhecimento']}' selected>{$q['Nome']}</option>";
                }else{
                    echo "<option value='{$q['idAreasDoConhecimento']}'>{$q['Nome']}</option>";
                }             
        }
?>