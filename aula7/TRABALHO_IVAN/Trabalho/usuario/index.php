<<<<<<< HEAD
<?php require_once "../controla_sessao/controla.php"; ?>

<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>
<?php require_once "../template/menu.php"; ?>


  <div class="container">
        <h1>Usuarios</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir usuarios
            </a>
        </div>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Foto</th>
                <th scope="col" width="25%">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($usuarios as $usuario){ ?>
            <tr>
                <th scope="row"><?php echo $usuario['nome']; ?></th>
                <td><?php echo $usuario['login']; ?></td>
                <td><img src="../uploads/<?php echo $usuario['foto']; ?>" height="35px" alt=""></td>
                <td>
                  <a href="excluir.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
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
<?php require_once "../template/menu.php"; ?>


  <div class="container">
        <h1>Usuarios</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir usuarios
            </a>
        </div>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Foto</th>
                <th scope="col" width="25%">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($usuarios as $usuario){ ?>
            <tr>
                <th scope="row"><?php echo $usuario['nome']; ?></th>
                <td><?php echo $usuario['login']; ?></td>
                <td><img src="../uploads/<?php echo $usuario['foto']; ?>" height="35px" alt=""></td>
                <td>
                  <a href="excluir.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="form.php?id=<?php echo $usuario['idusuario']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>
    
<?php require_once "../template/rodape.php"; ?>


>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
