<?php
require 'config.php';
require 'header.php';
require 'dao/UsuarioDaoMysql.php';
$usuarioDao = new UsuarioDaoMysql($pdo);

$list = $usuarioDao->findAll();
/*$list = [];
$sql = $pdo->query("SELECT * FROM users");

if ($sql->rowCount() > 0) {
  $list = $sql->fetchAll(PDO::FETCH_ASSOC);
}*/

?>

<div class="container mt-3">
  <h1>Home</h1>
  <div class="m-3">
    <a href="adicionar.php" class="btn btn-primary">Adicionar</a>
  </div>

  <table class="table table-hover">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col" class="text-center">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list as $user): ?>
        <tr>
          <th scope="row"><?= $user->getId(); ?></th>
          <td><?= $user->getName(); ?></td>
          <td><?= $user->getEmail(); ?></td>
          <td class="text-center">
            <a href="editar.php?id=<?= $user->getId(); ?>" class="btn btn-info btn-sm">EDITAR</a>
            <a href="excluir.php?id=<?= $user->getId(); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem cereza que quer excluir <?= $user['name']; ?>')">EXCLUIR</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
<?php require 'footer.php'; ?>