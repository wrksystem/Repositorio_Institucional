<header>
    <h3><i class="bi bi-list"></i>  AREAS DE CONHECIMENTO</h3>
</header>

<div>
    <a class="btn btn-success mb-2"  href="index.php?menu=knowledge_areas-register"><i class="bi bi-list"></i> NOVA ÁREA DE CONHECIMENTO</a>
</div>

<div>
    <form action="index.php?menu=knowledge_areas" method="post">
        <div class="input-group">
            <input class="form-control" type="text" name="search">
            <button class="btn btn-primary btn-sn" type="submit"><i class="bi bi-search"></i>PESQUISAR</button>
        </div>
    </form>
</div>
<!--Knowledge areas-->
<div class="maintable">
    <table class="table table-primary table-striped table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            //paginação start
            $amount = 8;
            $page = (isset($_GET["page"]))?(int)$_GET["page"]:1;
            $start = ($amount * $page) - $amount;

            //paginação end        
        
            $search = (isset($_POST["search"]))?$_POST["search"]:"";
        
            $sql = "SELECT
            idAreasDoConhecimento,
            upper(Nome) AS Nome
            FROM areasdoconhecimento

            WHERE         
                idAreasDoConhecimento = '{$search}' OR
                Nome LIKE '%{$search}%'
                ORDER BY Nome ASC
                LIMIT $start, $amount        
            ";

            $rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));

            while($data = mysqli_fetch_assoc($rs) ){

        
        ?>
                    <tr>
                        <td><?=$data["idAreasDoConhecimento"] ?></td>
                        <td class="text-nowrap"><?=$data["Nome"] ?></td>   
                        <td class="text-center"><a class="btn btn-warning btn-sm" href="index.php?menu=edit-knowledge_areas&idAreasDoConhecimento=<?=$data["idAreasDoConhecimento"]?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td class="text-center"><a class="btn btn-danger btn-sm" href="index.php?menu=delete-knowledge_areas&idAreasDoConhecimento=<?=$data["idAreasDoConhecimento"]?>"><i class="bi bi-trash-fill"></i></a></td>
                    </tr>
            
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<ul class="pagination justify-content-center">
    <?php
    //continuação paginação
        $sqlTotal = "SELECT idAreasDoConhecimento FROM areasdoconhecimento";
        $qrTotal = mysqli_query($conection, $sqlTotal) or die("Erro ao executar a consulta!" . mysqli_error($conection));
        $numTotal = mysqli_num_rows($qrTotal);
        $totalPage = ceil($numTotal / $amount);
        
        echo "<li class='page-item'><span class='page-link'>Total Registros:" . $numTotal . "</span></li>";
        echo '<li class="page-item"><a class="page-link" href="?menu=knowledge_areas&page=1">Primeira Página</a></li> ';

        if($page > 6){
            ?>
                <li class="page-item"><a class="page-link" href="?menu=knowledge_areas&page=<?php echo $page-1?>"> <<< </a></li>
            <?php
        }
        for($i = 1; $i <= $totalPage; $i++){    
            if($i >= ($page - 5) && $i <= ($page + 5)){
                if($i == $page){
                    echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
                }else{
                    echo "<li class='page-item'><a class='page-link' href=\"?menu=knowledge_areas&page=$i\"> $i </a></li>";
                }
            }
        }
        if($page < ($totalPage - 5)){
            ?>
                <li class="page-item"><a class="page-link" href="?menu=knowledge_areas&page=<?php echo $page+1?>"> >>> </a></li>
            <?php
        }

        echo "<li class='page-item'><a class='page-link' href=\"?menu=knowledge_areas&page=$totalPage\">Ultima Página</a></li>";
        //finalização paginação

    ?>
</ul>