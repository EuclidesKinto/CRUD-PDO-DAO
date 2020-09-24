<?php require 'header.php'; ?>
<div class="container">
    <h1 class="mb-3">Adiconar</h1>
    <div class="m-3">
      <a href="index.php" class="btn btn-primary">Home</a>
  </div>
    <form action="adicionar_action.php" method="post">

    <div class="form-group ">
      <label>Nome</label>
      <input type="text" class="form-control" name="name" placeholder="Nome">
    </div>

    <div class="form-group">
      <label>Endereço de email</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Seu email">
    </div>

    <button type="submit" class="btn btn-primary btn-block text-center">ADICIONAR</button>
  </form>
</div>
<?php require 'footer.php'; ?>
