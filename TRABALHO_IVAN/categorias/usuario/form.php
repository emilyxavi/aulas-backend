<<<<<<< HEAD
<?php require_once "consultar_por_id.php"; ?>
<?php require_once "../template/cabecalho.php";  ?>


<div>

    <h1>Cadastro de Categorias</h1>
    <hr>

    <form method="post" action="<?php echo isset($categoria['id']) ? "atualizar.php" : "inserir.php"; ?>">
       <input type="hidden" name="id" id="id" value="<?php echo $categoria['id'] ?? ""; ?>"><br>
       <label for="nome" class="form-label">Nome</label><br>
       <input type="text" name="nome" id="nome "value="<?php echo $categoria['nome'] ?? ""; ?>"><br>

       <label for="nome" class="form-label">Descrição</label><br>
       <input type="text" name="descricao" id="nome" value="<?php echo $categoria['descricao'] ?? ""; ?>"><br>

       <label for="nome" class="form-label">Cor</label><br>
       <input type="text" name="cor" id="nome" value="<?php echo $categoria['cor'] ?? ""; ?>"><br>

       <label for="nome" class="form-label">Ativos</label><br>
       <input type="text" name="ativos" id="nome" value="<?php echo $categoria['ativos'] ?? ""; ?>"><br>

        <input type="submit" value="Enviar">
    </form>
</div>

=======
<?php require_once "consultar_por_id.php"; ?>
<?php require_once "../template/cabecalho.php";  ?>


<div>

    <h1>Cadastro de Categorias</h1>
    <hr>

    <form method="post" action="<?php echo isset($categoria['id']) ? "atualizar.php" : "inserir.php"; ?>">
       <input type="hidden" name="id" id="id" value="<?php echo $categoria['id'] ?? ""; ?>"><br>
       <label for="nome" class="form-label">Nome</label><br>
       <input type="text" name="nome" id="nome "value="<?php echo $categoria['nome'] ?? ""; ?>"><br>

       <label for="nome" class="form-label">Descrição</label><br>
       <input type="text" name="descricao" id="nome" value="<?php echo $categoria['descricao'] ?? ""; ?>"><br>

       <label for="nome" class="form-label">Cor</label><br>
       <input type="text" name="cor" id="nome" value="<?php echo $categoria['cor'] ?? ""; ?>"><br>

       <label for="nome" class="form-label">Ativos</label><br>
       <input type="text" name="ativos" id="nome" value="<?php echo $categoria['ativos'] ?? ""; ?>"><br>

        <input type="submit" value="Enviar">
    </form>
</div>

>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
