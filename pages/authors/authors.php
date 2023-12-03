<header>
    <h3><i class="bi bi-person"></i>  AUTORES</h3>
</header>

<div>
    <a class="btn btn-success mb-2"  href="index.php?menu=author-register"><i class="bi bi-person-plus-fill"></i> NOVO AUTOR</a>
</div>

<div>
    <form action="index.php?menu=authors" method="post">
        <div class="input-group">
            <input class="form-control" type="text" name="search">
            <button class="btn btn-primary btn-sn" type="submit"><i class="bi bi-search"></i>PESQUISAR</button>
        </div>
    </form>
</div>
<!--Authors-->
<div class="maintable">
    <table class="table table-primary table-striped table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>E-mail</th>
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
            id,
            upper(Autor) AS Autor,
            lower(Email) AS Email
            FROM autor
            
            WHERE         
            id = '{$search}' OR
            Autor LIKE '%{$search}%'
            ORDER BY Autor ASC
            LIMIT $start, $amount
            ";

            $rs = mysqli_query($conection, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conection));

            while($data = mysqli_fetch_assoc($rs) ){

        
        ?>
                    <tr>
                        <td><?=$data["id"] ?></td>
                        <td class="text-nowrap"><?=$data["Autor"] ?></td>
                        <td class="text-nowrap"><?=$data["Email"] ?></td>   
                        <td class="text-center">
                            <a class="btn btn-warning btn-sm" href="index.php?menu=edit-author&id=<?=$data["id"]?>"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-danger btn-sm" href="index.php?menu=delete-author&id=<?=$data["id"]?>"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
            
                <?php
                    }
                ?>
        </tbody>
    </table>
</div>