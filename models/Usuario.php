<?php
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $celular;
    private $cidade;

    public function getId() {
        return $this->id;
    }
    public function setId($i) {
        $this->id = trim($i);
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome = ucwords(trim($n));
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($e) {
        $this->email = strtolower(trim($e));
    }

    public function getCellphone() {
        return $this->celular;
    }

    public function setCellphone($cel) {
        $this->celular = $cel;
    }

    public function getCity() {
        return $this->cidade;
    }

    public function setCity($cid) {
        $this->cidade = ucwords(trim($cid));
    }
}

interface UsuarioDAO {
    public function add(Usuario $u);
    public function findAll();
    public function findByEmail($email);
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
}