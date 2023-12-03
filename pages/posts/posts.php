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
        </tr>
    </thead>
    <tbody>
    
    <?php    
        $sql = "SELECT
        idCadastro,
        upper(titulo) AS titulo,
        upper(Subtitulo) AS Subtitulo,
        DATE_FORMAT(DataDePublicacao,'%d/%m/%Y') AS DataDePublicacao,
        upper(PalavraChave) AS PalavraChave,
        lower(Link) AS Link
        FROM iniciacaocientifica";

        $rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));

        while($dados = mysqli_fetch_assoc($rs) ){

    
            ?>
                <tr>
                    <td><?=$dados["idCadastro"] ?></td>
                    <td class="text-nowrap"><?=$dados["Titulo"] ?></td>
                    <td class="text-nowrap"><?=$dados["Subtitulo"] ?></td>
                    <td class="text-nowrap"><?=$dados["DataDePublicacao"] ?></td>
                    <td class="text-nowrap"><?=$dados["Autor"] ?></td>
                    <td class="text-nowrap"><?=$dados["PalavraChave"] ?></td>
                    <td class="text-nowrap"><?=$dados["AreaDoConhecimento"] ?></td>
                    <td class="text-nowrap"><?=$dados["Link"] ?></td>    
                    <td class="text-center"><a class="btn btn-warning btn-sm" href="index.php?menuop=edit-post&idCadastro=<?=$dados["idCadastro"]?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td class="text-center"><a class="btn btn-danger btn-sm" href="index.php?menuop=delete-post&idCadastro=<?=$dados["idCadastro"]?>"><i class="bi bi-trash-fill"></i></a></td>
                </tr>
        
            <?php
                }
            ?>
    </tbody>
</table>
</div>