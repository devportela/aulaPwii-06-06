<?php
class Aluno{
    private $id;
    private $ra;
    private $nome;
    private $curso;
    private $periodo;
    private $pdo;


  public function __construct()
  {
    echo "construtor chamado";
  }


    //getter and setters - modificadores de acesso

    public function getRa(){
        return $this->ra;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function getPeriodo(){
        return $this->periodo;
    }




    
    public function setRa($ra){
        $this->$ra = $ra;
    }

    public function setNome($nome){
        $this->$nome = $nome;
    }
    
    public function setCurso($curso){
        $this->$curso = $curso;
    }
    
    public function setPeriodo($periodo){
        $this->$periodo = $periodo;
    }





}





