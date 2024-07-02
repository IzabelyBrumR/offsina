<?php
require_once 'ConexaoMysql.php';
class ordersModel {
    
    public  $id;
    public  $vehicles;
    public  $problem;

    public function __construct() {
        //vazio
    }
   public function getId() {
       return $this->id;
   }
   public function getVehicles() {
       return $this->vehicles;
   }
   public function getProblem() {
       return $this->problem;
   }
   public function setId($id): void {
       $this->id = $id;
   }
   public function setVehicles($vehicles): void {
       $this->vehicles = $vehicles;
   }

   public function setProblem($problem): void {
       $this->problem = $problem;
   }

    //Métodos especialistas
    public function loadAll() {
        //Criar um objeto de conexão
        $db = new ConexaoMysql();
        //Abrir conexão com banco de dados
        $db->Conectar();
        //Criar consulta
        $sql = 'SELECT * FROM orders';
        //Executar método de consulta
        $resultList = $db->Consultar($sql);
        //Desconectar do banco
        $db->Desconectar();
        return $resultList;
    }  
    function cadastro($vehicles,$problem) {
        $db = new ConexaoMysql();
        $db->Conectar(); 
        $sql = 'INSERT INTO orders (vehicles,problem) values ("'.$vehicles.'","'.$problem.'")';
        $db->Executar($sql);    
        $db->Desconectar();
        return $db->total;
    }
    function loadById($carroId) {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();
    
        //Abrir conexão com banco de dados
        $db->Conectar();
    
        //Criar consulta
        $sql = 'SELECT * FROM vehicles where id =' . $carroId;
        //Executar método de consulta
        $resultList = $db->Consultar($sql);
    
        $db->Desconectar();
    
        return $resultList;
    }
}
?>