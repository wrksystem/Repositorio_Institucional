<header>
    <h3><i class="bi bi-book"></i>  PUBLICAÇÕES</h3>
</header>

<div>
    <a class="btn btn-success mb-2"  href="index.php?menu=post-register"><i class="bi bi-book"></i> NOVA PUBLICAÇÃO</a>
</div>

<div>
    <form action="index.php?menu=posts" method="post">
        <div class="input-group">
            <input class="form-control" type="text" name="search">
            <button class="btn btn-primary btn-sn" type="submit"><i class="bi bi-search"></i>PESQUISAR</button>
        </div>
    </form>
</div>
<!--Artigos e Posts-->
<div class="maintable">
    <table class="table table-primary table-striped table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th class="text-center">Título</th>
                <th class="text-center">Subtítulo</th>
                <th class="text-center">Data de Publicação</th>
                <th class="text-center">Autor</th>            
                <th class="text-center">Palavra Chave</th>
                <th class="text-center">Areas Do Conhecimento</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Link</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            //paginação start
            $amount = 4;
            $page = (isset($_GET["page"]))?(int)$_GET["page"]:1;
            $start = ($amount * $page) - $amount;

            //paginação end        
        
            $search = (isset($_POST["search"]))?$_POST["search"]:"";

            $sql = "SELECT 
            IC.idCadastro,
            UPPER(IC.Titulo) AS nomeTitulo,
            UPPER(IC.Subtitulo) AS nomeSubtitulo,
            DATE_FORMAT(DataDePublicacao, '%d/%m/%Y') AS DataDePublicacao,
            UPPER(ATO.Autor) AS nomeAutor,
            UPPER(ARC.Nome) AS nomeConhecimento,
            UPPER(IC.PalavraChave) AS nomePalavraChave,
            UPPER(FRD.Categoria) AS nomeCategoria,
            IC.Link AS nomeLink 
            FROM
            iniciacaocientifica AS IC
            LEFT JOIN autor AS ATO ON IC.Autor_id = ATO.id
            LEFT JOIN areasdoconhecimento AS ARC ON IC.AreasDoConhecimento_idAreasDoConhecimento = ARC.idAreasDoConhecimento
            LEFT JOIN formatododocumento AS FRD ON IC.FormatoDoDocumento_id = FRD.id

            WHERE         
                idCadastro = '{$search}' OR
                IC.Titulo LIKE '%{$search}%' OR
                IC.Subtitulo LIKE '%{$search}%' OR
                iC.PalavraChave LIKE '%{$search}%' OR
                ATO.Autor LIKE '%{$search}%' OR
                ARC.Nome LIKE '%{$search}%' OR
                FRD.Categoria LIKE '%{$search}%'
                ORDER BY Titulo ASC
                LIMIT $start, $amount        
            ";

            $rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));

            while($data = mysqli_fetch_assoc($rs) ){
        
                ?>
                    <tr>
                        <td class="text-center"><?=$data["idCadastro"] ?></td>
                        <td class="my_class_text text-center"><?=$data["nomeTitulo"] ?></td>
                        <td class="my_class_text text-center"><?=$data["nomeSubtitulo"] ?></td>
                        <td class="text-nowrap text-center"><?=$data["DataDePublicacao"] ?></td>
                        <td class="my_class_text text-center"><?=$data["nomeAutor"] ?></td>
                        <td class="my_class_text text-center"><?=$data["nomePalavraChave"] ?></td>
                        <td class="my_class_text text-center"><?=$data["nomeConhecimento"] ?></td>
                        <td class="text-center"><?=$data["nomeCategoria"] ?></td>
                        <td class="text-center text-center"><a class="bi bi-file-pdf-fill btn-dark btn-sm align-middle" href="<?=$data["nomeLink"]?>" target="_blank"></a></td>    
                        <td class="text-center text-center"><a class="btn btn-warning btn-sm" href="index.php?menu=edit-post&idCadastro=<?=$data["idCadastro"]?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td class="text-center text-center"><a class="btn btn-danger btn-sm" href="index.php?menu=delete-post&idCadastro=<?=$data["idCadastro"]?>"><i class="bi bi-trash-fill"></i></a></td>
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
        $sqlTotal = "SELECT idCadastro FROM iniciacaocientifica";
        $qrTotal = mysqli_query($conection, $sqlTotal) or die("Erro ao executar a consulta!" . mysqli_error($conection));
        $numTotal = mysqli_num_rows($qrTotal);
        $totalPage = ceil($numTotal / $amount);
        
        echo "<li class='page-item'><span class='page-link'>Total Registros:" . $numTotal . "</span></li>";
        echo '<li class="page-item"><a class="page-link" href="?menuop=post&page=1">Primeira Página</a></li> ';

        if($page > 6){
            ?>
                <li class="page-item"><a class="page-link" href="?menu=post&page=<?php echo $page-1?>"> <<< </a></li>
            <?php
        }
        for($i = 1; $i <= $totalPage; $i++){    
            if($i >= ($page - 5) && $i <= ($page + 5)){
                if($i == $page){
                    echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
                }else{
                    echo "<li class='page-item'><a class='page-link' href=\"?menu=post&page=$i\"> $i </a></li>";
                }
            }
        }
        if($page < ($totalPage - 5)){
            ?>
                <li class="page-item"><a class="page-link" href="?menu=post&page=<?php echo $page+1?>"> >>> </a></li>
            <?php
        }

        echo "<li class='page-item'><a class='page-link' href=\"?menu=post&page=$totalPage\">Ultima Página</a></li>";
        //finalização paginação

    ?>
</ul>