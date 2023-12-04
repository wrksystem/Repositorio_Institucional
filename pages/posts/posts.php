<header>
    <h3><i class="bi bi-book"></i>  PUBLICAÇÕES</h3>
</header>

<div>
    <a class="btn btn-success mb-2"  href="index.php?menu=post-register"><i class="bi bi-book"></i> NOVA PUBLICAÇÃO</a>
</div>

<div>
    <form action="index.php?menu=authors" method="post">
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
            <th>Título</th>
            <th>Subtítulo</th>
            <th>Data de Publicação</th>
            <th>Autor</th>
            <th>Areas Do Conhecimento</th>
            <th>Palavra Chave</th>
            <th>Link</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    
    <?php
        //paginação start
        $amount = 10;
        $page = (isset($_GET["page"]))?(int)$_GET["page"]:1;
        $start = ($amount * $page) - $amount;

        //paginação end        
    
        $search = (isset($_POST["search"]))?$_POST["search"]:"";

        $sql = "SELECT
        idCadastro,
        upper(titulo) AS titulo,
        upper(Subtitulo) AS Subtitulo,
        DATE_FORMAT(DataDePublicacao,'%d/%m/%Y') AS DataDePublicacao,
        upper(PalavraChave) AS PalavraChave,
        lower(Link) AS Link
        FROM iniciacaocientifica

        WHERE         
            idCadastro = '{$search}' OR
            titulo LIKE '%{$search}%'
            ORDER BY titulo ASC
            LIMIT $start, $amount        
        ";

        $rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));

        while($data = mysqli_fetch_assoc($rs) ){
    
            ?>
                <tr>
                    <td><?=$data["idCadastro"] ?></td>
                    <td class="text-nowrap"><?=$data["Titulo"] ?></td>
                    <td class="text-nowrap"><?=$data["Subtitulo"] ?></td>
                    <td class="text-nowrap"><?=$data["DataDePublicacao"] ?></td>
                    <td class="text-nowrap"><?=$data["Autor"] ?></td>
                    <td class="text-nowrap"><?=$data["PalavraChave"] ?></td>
                    <td class="text-nowrap"><?=$data["AreaDoConhecimento"] ?></td>
                    <td class="text-nowrap"><a class="btn bi bi-file-pdf-fill"></a> <?=$data["Link"] ?></td>    
                    <td class="text-center"><a class="btn btn-warning btn-sm" href="index.php?menu=edit-post&idCadastro=<?=$data["idCadastro"]?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td class="text-center"><a class="btn btn-danger btn-sm" href="index.php?menu=delete-post&idCadastro=<?=$data["idCadastro"]?>"><i class="bi bi-trash-fill"></i></a></td>
                </tr>
        
            <?php
                }
            ?>
    </tbody>
</table>
</div>