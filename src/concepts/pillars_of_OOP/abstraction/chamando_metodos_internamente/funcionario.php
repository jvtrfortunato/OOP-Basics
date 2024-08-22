<?php

    class Funcionario {
        //atributos
        public $nome = null;                
        public $telefone = null;               
        public $numFilhos = null;       
        public $cargo = null;            
        public $salario = null;              
        
        //set get
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        //métodos
        function resumirCadFunc() {
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)";
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'João');
    $y->__set('telefone', 1235555643);
    $y->__set('numFilhos', 2);
    $y->__set('cargo', 'Software Engineer');
    $y->__set('salario', 15000);
    //echo $y->__get('nome') . ' is listed in the Funcionario database along with his telefone number: ' . $y->__get('telefone') . ', children count: ' . $y->__get('numFilhos') . ', job title: ' . $y->__get('cargo') . ', salario: $' . $y->__get('salario');
    echo $y->resumirCadFunc();
    echo '<br /> <br />';

    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('telefone', 5553452266);
    $x->__set('numFilhos', 0);
    $x->__set('cargo', 'Data Analyst');
    $x->__set('salario', 11000);
    //echo $x->__get('nome') . ' is listed in the Funcionario database along with her telefone number: ' . $x->__get('telefone') . ', children count: ' . $x->__get('numFilhos') . ', job title: ' . $x->__get('cargo') . ', salario: $' . $x->__get('salario');
    echo $x->resumirCadFunc();

?>