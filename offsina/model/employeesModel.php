<?php


namespace Model;
require_once 'conexaoMysql.php';
use ConexaoMysql;
use Exception;

class employeesModel
{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $birthday;
    protected $numberDependents;
    protected $salary;
    protected $email;
    protected $pass;
    protected $departament;
    public $total;
    

    public function __construct()
    {
       
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of birthday
     */ 
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     *
     * @return  self
     */ 
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get the value of numberDependents
     */ 
    public function getNumberDependents()
    {
        return $this->numberDependents;
    }

    /**
     * Set the value of numberDependents
     *
     * @return  self
     */ 
    public function setNumberDependents($numberDependents)
    {
        $this->numberDependents = $numberDependents;

        return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of departament
     */ 
    public function getDepartament()
    {
        return $this->departament;
    }

    /**
     * Set the value of departament
     *
     * @return  self
     */ 
    public function setDepartament($departament)
    {
        $this->departament = $departament;

        return $this;
    }

    public function login($email, $senha){

        $sql = 'SELECT * FROM employees where email = "' . $email . '" and pass = "' . $senha . '" ';
        $db = new ConexaoMysql();
        $db->Conectar();
        echo $sql;
        $resultList = $db->Consultar($sql);
        $user = new employeesModel();
        $this->total = $db->total;
        if($this->total>0){
            foreach ($resultList as $key => $value) {
                $this->id = $value['id'];
                $this->firstName = $value['first_name'];
                $this->lastName = $value['last_name'];
                $this->birthday = $value['birthday'];
                $this->numberDependents = $value['number_dependents'];
                $this->salary = $value['salary'];
                $this->email = $value['email'];
                $this->pass = $value['pass'];
                $this->departament = $value['department_id'];
            }
        }
        $db->Desconectar();
        return $this;
    }
}
