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
        $amount = 10;
        $page = (isset($_GET["page"]))?(int)$_GET["page"]:1;
        $start = ($amount * $page) - $amount;

        //paginação end        
    
        $search = (isset($_POST["search"]))?$_POST["search"]:"";

        $sql = "SELECT
        idCadastro,
        upper(Titulo) AS Titulo,
        upper(Subtitulo) AS Subtitulo,
        DATE_FORMAT(DataDePublicacao,'%d/%m/%Y') AS DataDePublicacao,
        upper(Autor_id) AS Autor_id,
        upper(PalavraChave) AS PalavraChave,        
        upper(AreasDoConhecimento_idAreasDoConhecimento) AS AreasDoConhecimento_idAreasDoConhecimento,
        upper(FormatoDoDocumento_id) AS FormatoDoDocumento_id,
        Link AS Link
        FROM iniciacaocientifica

        WHERE         
            idCadastro = '{$search}' OR
            Titulo LIKE '%{$search}%' OR
            Subtitulo LIKE '%{$search}%' OR
            PalavraChave LIKE '%{$search}%'
            ORDER BY Titulo ASC
            LIMIT $start, $amount        
        ";

        $rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));

        while($data = mysqli_fetch_assoc($rs) ){
    
            ?>
                <tr>
                    <td class="text-center"><?=$data["idCadastro"] ?></td>
                    <td class="text-center"><?=$data["Titulo"] ?></td>
                    <td class="text-center"><?=$data["Subtitulo"] ?></td>
                    <td class="text-nowrap text-center"><?=$data["DataDePublicacao"] ?></td>
                    <td class="text-nowrap text-center"><?=$data["Autor_id"] ?></td>
                    <td class="text-nowrap text-center"><?=$data["PalavraChave"] ?></td>
                    <td class="text-nowrap text-center"><?=$data["AreasDoConhecimento_idAreasDoConhecimento"] ?></td>
                    <td class="text-nowrap text-center"><?=$data["FormatoDoDocumento_id"] ?></td>
                    <td class="text-center text-center"><a class="bi bi-file-pdf-fill btn-danger btn-sm align-middle" href="<?=$data["Link"]?>" target="_blank"></a></td>    
                    <td class="text-center text-center"><a class="btn btn-warning btn-sm" href="index.php?menu=edit-post&idCadastro=<?=$data["idCadastro"]?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td class="text-center text-center"><a class="btn btn-danger btn-sm" href="index.php?menu=delete-post&idCadastro=<?=$data["idCadastro"]?>"><i class="bi bi-trash-fill"></i></a></td>
                </tr>
        
            <?php
                }
            ?>
    </tbody>
</table>
</div>