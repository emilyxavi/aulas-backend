<<<<<<< HEAD
<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>



  <div class="container">
        <h1>Produtos</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir produto
            </a>
        </div>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Foto</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($produtos as $produto){ ?>
            <tr>
                <th scope="row"><?php echo $produto['nome']; ?></th>
                <td><?php echo $produto['preco']; ?></td>
                <td><img src="../uploads/<?php echo $produto['foto']; ?>" height="35px" alt=""</td>
                <td>
                  <a href="excluir.php?id=<?php echo $produto['idproduto']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $produto['idproduto']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>

<?php require_once "../template/rodape.php"; ?>
=======
<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>



  <div class="container">
        <h1>Produtos</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir produto
            </a>
        </div>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Foto</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($produtos as $produto){ ?>
            <tr>
                <th scope="row"><?php echo $produto['nome']; ?></th>
                <td><?php echo $produto['preco']; ?></td>
                <td><img src="../uploads/<?php echo $produto['foto']; ?>" height="35px" alt=""</td>
                <td>
                  <a href="excluir.php?id=<?php echo $produto['idproduto']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $produto['idproduto']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>

<?php require_once "../template/rodape.php"; ?>
>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
