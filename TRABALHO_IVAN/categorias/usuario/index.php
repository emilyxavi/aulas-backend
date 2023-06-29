<<<<<<< HEAD
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php";  ?>


  <div class="container">
        <h1>Categorias</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir categoria
            </a>
        </div>

        <table class="table" id="myTable" border="1px">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Cor</th>
                <th scope="col">Ativo</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($categorias as $categoria){ ?>
            <tr>
                <td scope="row"><?php echo $categoria['nome']; ?></td>
                <td scope="row"><?php echo $categoria['descricao']; ?></td>
                <td scope="row"><?php echo $categoria['cor']; ?></td>
                <td scope="row"><?php echo $categoria['ativos']; ?></td>
                <td>
                  <a href="excluir.php?id=<?php echo $categoria['id']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $categoria['id']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>


=======
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php";  ?>


  <div class="container">
        <h1>Categorias</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir categoria
            </a>
        </div>

        <table class="table" id="myTable" border="1px">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Cor</th>
                <th scope="col">Ativo</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($categorias as $categoria){ ?>
            <tr>
                <td scope="row"><?php echo $categoria['nome']; ?></td>
                <td scope="row"><?php echo $categoria['descricao']; ?></td>
                <td scope="row"><?php echo $categoria['cor']; ?></td>
                <td scope="row"><?php echo $categoria['ativos']; ?></td>
                <td>
                  <a href="excluir.php?id=<?php echo $categoria['id']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $categoria['id']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>


>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
