<?php
require 'config.php'; 
require 'header.php'; 

$info = [];

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);

    }else{
        header("Location: index.php");
        exit; 
    }
}else{

    header("Location: index.php");
    exit;
}



?>

<div class="container">
    <h1 class="mb-3">Editar</h1>
    <div class="m-3">
        <span>
          <a href="index.php" class="btn btn-primary mr-1">Home</a>
          <a href="adicionar.php" class="btn btn-primary">Adicionar</a>
        </span>
    </div>
    <form action="editar_action.php" method="post">
    <input type="hidden" class="form-control" name="id" value="<?=$info['id']?>">
    <div class="form-group ">
      <label>Nome</label>
      <input type="text" class="form-control" name="name" value="<?=$info['name']?>">
    </div>

    <div class="form-group">
      <label>Endereço de email</label>
      <input type="email" class="form-control" name="email"  value="<?=$info['email']?>">
    </div>

    <button type="submit" class="btn btn-primary btn-block text-center">Editar</button>
  </form>
</div>
<?php require 'footer.php'; ?>