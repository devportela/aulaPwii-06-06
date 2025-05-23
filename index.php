<?php
require 'classes/Aluno.class.php';


$retorno = $aluno = new Aluno();
if($retorno){
    echo "<h1>conectado com o banco </h1>";
    
}else{
    echo "banco indisponivel,tente novamente mais tarde";
}