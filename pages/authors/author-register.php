<header>
    <h3><i class="bi bi-person"></i> REGISTRO DE AUTORES</h3>
</header>
<div>
    <form action="index.php?menu=insert-author" method="post">
        <div class="mb-3">
            <label class="form-label" for="name">Nome</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">E-mail</label>
            <input class="form-control" type="text" name="email" required>
        </div>
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="ADICIONAR" name="btnAdicionar">
        </div>
    </form>
</div>
