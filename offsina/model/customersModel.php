<?php

namespace Model;
require_once 'conexaoMysql.php';

use ConexaoMysql;
use Exception;

class customersModel
{
    protected $id;
   
    //TODO: Insira as propriedades dos clientes aqui.
    protected $first_name;
    protected $last_name;
    protected $phone;
    protected $email;
    protected $address;
    protected $city;
    protected $state;
    protected $zip_code;
    protected $registration_date;
    

    //TODO: Crie os métodos acessores e modificadores aqui.
    public function getId() {
        return $this->id;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCity() {
        return $this->city;
    }

    public function getState() {
        return $this->state;
    }

    public function getZip_code() {
        return $this->zip_code;
    }

    public function getRegistration_date() {
        return $this->registration_date;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setFirst_name($first_name): void {
        $this->first_name = $first_name;
    }

    public function setLast_name($last_name): void {
        $this->last_name = $last_name;
    }

    public function setPhone($phone): void {
        $this->phone = $phone;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setCity($city): void {
        $this->city = $city;
    }

    public function setState($state): void {
        $this->state = $state;
    }

    public function setZip_code($zip_code): void {
        $this->zip_code = $zip_code;
    }

    public function setRegistration_date($registration_date): void {
        $this->registration_date = $registration_date;
    }

    public function __construct()
    {
        
    }
  
    public function loadAll(){
        $con = new ConexaoMysql();
        $con->Conectar();

        $sql = 'SELECT * FROM customers;';

        $resultList = $con->Consultar($sql);

        return $resultList;
    }

    public function getCustomerById($id){
        $com = new ConexaoMysql();
        $com-> Conectar();

        $sql = 'SELECT *  FROM customers where id = '.$id;
        $resultList = $com->Consultar($sql);

        if($com->total == 1){
            foreach($resultList as $customer){
                $this->setFirst_name($customer['first_name']);
                return 1;
            }
        }else{
            return 0;
        }
    }

    
}
