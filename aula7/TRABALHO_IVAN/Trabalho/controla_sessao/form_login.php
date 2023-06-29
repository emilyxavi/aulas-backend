<<<<<<< HEAD
<?php include_once "../controla_sessao/verifica_login.php"; ?>
<?php include_once "../template/cabecalho.php"; ?>
<div class="container">
<br>

<?php if(isset($erro_login)): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo $erro_login; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
<?php endif; ?>                                                                   

<h1>Controle de Acesso</h1>
<hr>
<form action="form_login.php" method="post">
   
    <label for="login" class="form-label">Usuário</label>
    <input type="text" name="usuario" class="form-control">

    <label for="login" class="form-label">Senha</label>
    <input type="text" name="senha" class="form-control">

    <button type="submit" class="btn btn-primary">Entrar</button>
</form>

<?php include_once "../template/rodape.php"; ?>
=======
<?php include_once "../controla_sessao/verifica_login.php"; ?>
<?php include_once "../template/cabecalho.php"; ?>
<div class="container">
<br>

<?php if(isset($erro_login)): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo $erro_login; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
<?php endif; ?>                                                                   

<h1>Controle de Acesso</h1>
<hr>
<form action="form_login.php" method="post">
   
    <label for="login" class="form-label">Usuário</label>
    <input type="text" name="usuario" class="form-control">

    <label for="login" class="form-label">Senha</label>
    <input type="text" name="senha" class="form-control">

    <button type="submit" class="btn btn-primary">Entrar</button>
</form>

<?php include_once "../template/rodape.php"; ?>
>>>>>>> 8d143aa93099e51f9e381ec82b7ee8259b44c772
