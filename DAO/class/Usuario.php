<?php
class Usuario{
    private $idusuario;
    private $login;
    private $senha;
    private $dt_cadastro;

    public function getIdusuario(){
        return $this->idusuario;
    }
    public function setIdusuario($idusuario){
        $this->idusuario = $idusuario;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getDtcadastro(){
        return $this->dt_cadastro;
    }
    public function setDtcadastro($dt_cadastro){
        $this->dt_cadastro = $dt_cadastro;
    }

    public function loadById($id){

        $sql = new Banco();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if($count($result) > 0){

            $this->setResult($results[0]);
        }

    }

    public static function getList(){
        $sql = new Banco();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY login");

    }

    public static function search($login){

        $sql = new Banco();

        return $sql->select("SELECT * FROM tb_usuarios WHERE login LIKE :SEARCH ORDER BY login", array(
            ':SEARCH' => "%".$login."%"         
        ));
    }

    public function login($login, $password){

        $sql = new Banco();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE login = :LOGIN AND senha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if(count($results) > 0){

            $this->setResult($results[0]);

        }else{

            throw new Exception("Login e/ou senha inválidos");

        }
    }

    public function setResult($dados){

        $this->setIdusuario($dados['idusuario']);
        $this->setLogin($dados['login']);
        $this->setSenha($dados['senha']);
        $this->setDtcadastro(new DateTime($dados['dt_cadastro']));

    }

    public function insert(){

        $sql = new Banco();
        //criar a procedure sp+usuarios_insert no banco
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN' => $this->getLogin(),
            ':PASSWORD'=>$this->getSenha()
        ));

        if(count($results) > 0){
            $this->setResult($results[0]);
        }
    }

    public function update($login, $password){

        $this->setLogin($login);
        $this->setSenha($password);

        $sql = new Banco();

        $sql->query("UPDATE tb_usuarios SET login = :LOGIN, senha = :PASSWORD WHERE idusuario = :ID", array(
            ":LOGIN"=>$this->getLogin(),
            ":PASSWORD"=>$this->getSenha(),
            ":ID"=>$this->getById()
        ));
    }

    public function delete(){
        
        $sql = new Banco();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=> $this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setLogin("");
        $this->setSenha("");
        $this->setDtcadastro(new DateTime());
    }

    public function __construct($login = "", $senha = ""){

        $this->setLogin($login);
        $this->setSenha($senha);
    }

    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "login"=>$this->getLogin(),
            "senha"=>$this->getSenha(),
            "dt_cadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

        ));
    }


}