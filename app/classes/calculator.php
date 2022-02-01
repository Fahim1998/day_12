<?php
namespace App\classes;
use App\classes\User;
class calculator

{
    public $firstNumber =10;
    protected $secondNumber =20;
    private $operator =30;
    public $result;

    public function __construct($data)
    {
       $this->firstNumber= $data['first_number'];
       $this->secondNumber= $data['second_number'];
       $this->operator= $data['operator'];
    }

//return $this->add();
    public function index()
    {
      switch ($this->operator)
      {
           case '+':
               return $this->add();
              break;
           case '-';
               return $this->sub();
                break;
           case '*';
               return $this->multiply();
                break;


      }
      return $this->result;

    }

    protected function add()
    {
       return $this->firstNumber + $this->secondNumber;
    }
    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }

    protected function multiply()
    {
        return $this->firstNumber * $this->secondNumber;
    }
}