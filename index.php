<?php
include("db/conection.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/default_estyle.css">
    <link rel="icon" type="imagex/png" href="./img/logo.png">
    <title>Repositório Institucional Atenas</title>    
</head>
<body>

    <header class="bg-info">
        <div class="container">
            <a class="navbar-brand" href="index.php">                                
                <img src="img/logo.png" alt="Logo" width="30">
                <h1 class="text-light">Repositório Institucional Atenas</h1>
            </a>
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <div class="collapse navbar-collapse" id="conteudoNavbarSuprtado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menu=home">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menu=authors">Autores</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menu=knowledge_areas">Areas de Conhecimento</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menu=document_format">Formato de Documento</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
    <div class="container">
            <?php
                $menu = (isset($_GET["menu"]))?$_GET["menu"]:"home";
                switch ($menu) {
                    case 'home':
                        include("pages/posts/posts.php");
                        break;
                    //post section
                    case 'post-register':
                        include("pages/posts/post-register.php");
                        break;
                    case 'insert-post':
                        include("pages/posts/insert-post.php");
                        break;
                    case 'edit-post':
                        include("pages/posts/edit-post.php");
                        break;
                    case 'delete-post':
                        include("pages/posts/delete-post.php");
                        break;
                    case 'update-post':
                        include("pages/posts/update-post.php");
                        break;
                    //author section
                    case 'authors':
                        include("pages/authors/authors.php");
                        break;
                    case 'author-register':
                        include("pages/authors/author-register.php");
                        break;
                    case 'insert-author':
                        include("pages/authors/insert-author.php");
                        break;
                    case 'delete-author':
                        include("pages/authors/delete-author.php");
                        break;
                    case 'edit-author':
                        include("pages/authors/edit-author.php");
                        break;
                    case 'update-author':
                        include("pages/authors/update-author.php");
                        break;
                    case 'select-author':
                        include("pages/authors/select-author.php");
                        break;
                    //knowledge area section
                    case 'knowledge_areas':
                        include("pages/knowledge_areas/knowledge_areas.php");
                        break;
                    case 'knowledge_areas-register':
                        include("pages/knowledge_areas/knowledgeAreas-register.php");
                        break;
                    case 'insert-knowledge_areas':
                        include("pages/knowledge_areas/insert-knowledgeAreas.php");
                        break;
                    case 'delete-knowledge_areas':
                        include("pages/knowledge_areas/delete-knowledgeAreas.php");
                        break;
                    case 'update-knowledge_areas':
                        include("pages/knowledge_areas/update-knowledgeAreas.php");
                        break;
                    case 'edit-knowledge_areas':
                        include("pages/knowledge_areas/edit-knowledgeAreas.php");
                        break;
                    case 'select-knowledge_areas':
                        include("pages/knowledge_areas/select-knowledgeAreas.php");
                        break;
                    //document format section
                    case 'document_format':
                        include("pages/document_format/document_format.php");
                        break;
                    case 'document_format-register':
                        include("pages/document_format/document_format-register.php");
                        break;
                    case 'insert-document_format':
                        include("pages/document_format/insert-document_format.php");
                        break;
                    case 'edit-document_format':
                        include("pages/document_format/edit-document_format.php");
                        break;
                    case 'delete-document_format':
                        include("pages/document_format/delete-document_format.php");
                        break;
                    case 'update-document_format':
                        include("pages/document_format/update-document_format.php");
                        break;
                    case 'select-document_format':
                        include("pages/document_format/select-document_format.php");
                        break;
                    //routes end                             

                    default:
                        include("pages/posts/posts.php");
                        break;
                }
            ?>
        </div>
    </main>
    <footer class="container-fluid fixed-bottom bg-info text-light">
        <div class="text-center">Repositório Institucional Atenas V-1.0</div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</body>
</html>