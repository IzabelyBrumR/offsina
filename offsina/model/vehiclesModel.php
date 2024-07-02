<?php

namespace Model;
require_once 'conexaoMysql.php';

use ConexaoMysql;
use Exception;

class vehiclesModel
{
    protected $id;
    protected $make;
    protected $model;
    protected $year;
    protected $licencePlate;
    protected $color;
    protected $renavam;
    protected $customerId;
    protected $total; //total de registros modificados em um executar.

    
    public function __construct()
    {
        
    }
  

    /**
     * Identificador único
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Fabricante
     */
    public function getMake() {
        return $this->make;
    }

    /**
     * Modelo
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * Ano do veículo
     */
    public function getYear() {
        return $this->year;
    }

    /**
     * Placa
     */
    public function getLicencePlate() {
        return $this->licencePlate;
    }

    /**
     * Cor
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Renavam
     */
    public function getRenavam() {
        return $this->renavam;
    }

    /**
     * Dono (cliente)
     */
    public function getCustomerId() {
        return $this->customerId;
    }
    /**
     * Total de registos afetados
     */
    public function getTotal() {
        return $this->total;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the value of make
     */
    public function setMake($make): self {
        $this->make = $make;
        return $this;
    }

    /**
     * Set the value of model
     */
    public function setModel($model): self {
        $this->model = $model;
        return $this;
    }

    /**
     * Set the value of year
     */
    public function setYear($year): self {
        $this->year = $year;
        return $this;
    }

    /**
     * Set the value of licencePlate
     */
    public function setLicencePlate($licencePlate): self {
        $this->licencePlate = $licencePlate;
        return $this;
    }

    /**
     * Set the value of color
     */
    public function setColor($color): self {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the value of renavam
     */
    public function setRenavam($renavam): self {
        $this->renavam = $renavam;
        return $this;
    }

    /**
     * Set the value of customerId
     */
    public function setCustomerId($customerId): self {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Set the value total de registros afetados
     */
    public function setTotal($total): self {
        $this->total = $total;
        return $this;
    }

    public function loadAll() {
        
        $con = new ConexaoMysql();
        $con->Conectar();

        $sql = 'SELECT * FROM vehicles';

        $resultList = $con->Consultar($sql);

       //Retorna lista de todos os veículos
       return $resultList;
    }
    
    public function loadById($id) {
        
        $con = new ConexaoMysql();
        $con->Conectar();

        $this->id = $id;
        
        $sql = 'SELECT * FROM vehicles WHERE id='.$this->id;

        $resultList = $con->Consultar($sql);

        //Carrega o objeto selecionado pelo id
       foreach ($resultList as $key => $value) {
         $this->id = $value['id'];
         $this->make = $value['make'];
         $this->model = $value['model'];
         $this->year = $value['year'];
         $this->licencePlate = $value['license_plate'];
         $this->color = $value['color'];
         $this->renavam = $value['renavam'];
         $this->customerId = $value['customer_id'];
       }

        return $this;
    }

    //Insere e atualiza registros
    public function save(){
        $con = new ConexaoMysql();
        $con->Conectar();

        if($this->id > 0){
            $sql = 'UPDATE vehicles SET make = "'.$this->make.'", model = "'.$this->model.'", year = '.$this->year.', license_plate = "'.$this->licencePlate.'", color = "'.$this->color.'", renavam = "'.$this->renavam.'", customer_id = '.$this->customerId.' WHERE (`id` = '.$this->id.');';
        }else{
            $sql = 'INSERT INTO vehicles (make, model, year, license_plate, color, renavam,customer_id) VALUES
                    ("'.$this->make.'", "'.$this->model.'", '.$this->year.', "'.$this->licencePlate.'", "'.$this->color.'", "'.$this->renavam.'",'.$this->customerId.');';
        }
        $con->Executar($sql);

        $con->Desconectar();
    }

    
    public function delete($id){
        $con = new ConexaoMysql();
        $con->Conectar();
        
        $this->id = $id;
        if($this->id > 0){
            $sql = 'DELETE FROM vehicles WHERE id= '.$id;
        }
        $con->Executar($sql);
        //Atualiza o total de registros modificados pelo comando sql
        $this->total = $con->total;
        $con->Desconectar();
    }


}
