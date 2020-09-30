<?php
require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO
{
    private $pdo;
    public function __construct(PDO $drive)
    {
        $this->pdo = $drive;
    }

    public function add(Usuario $u)
    {
    }
    public function findAll()
    {
        $list = [];
        $sql = $this->pdo->query("SELECT * FROM users");
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach ($data as $item) {
               $u = new Usuario();
               $u->setId($item['id']);
               $u->setName($item['name']);
               $u->setEmail($item['email']);

               $list[] = $u;
            }
        }
        return $list;
    }
    public function finbById($id)
    {
    }
    public function update(Usuario $u)
    {
    }
    public function delete($id)
    {
    }
}
