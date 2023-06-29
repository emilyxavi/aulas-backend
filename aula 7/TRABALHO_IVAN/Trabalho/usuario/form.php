<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>

<div class="container">

    <h1>Cadastro de Produto</h1>
    <hr>

    <form
     action="<?php echo isset($usuario)?
      'atualizar.php' : 'inserir.php' ?>"
    method="post"
    enctype="multipart/form-data"
    >

       <label for="nome" class="form-label">Nome</label><br>
       <input type="text" name="nome" id="nome"><br>

       <label for="descricao"class="form-label">Login</label><br>
       <textarea  name="descricao" id="descricao"></textarea><br>

       <label for="preco"class="form-label">Senha</label><br>
       <input type="number" step="0.01" name="preco" id="preco"><br>

       <label for="foto"class="form-label">Foto</label><br>
       <input type="file" name="foto" id="foto"><br>

       <br>
       <button type="submit" class="btn btn_dark">Cadastrar</button>

    </form>
</div>

<?php require_once "../template/rodape.php"; ?>

