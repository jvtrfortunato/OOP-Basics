# OOP Paradigm
# Data structure with behaviors

<?php

    class Calculator{

        public $a = 10;
        public $b = 7;
        public $operator = 'sum';

        public function calculate(){
            if($this->operator == 'sum'){
                return $this->a + $this->b;
            }

            return false;
        }
    }

    $calculate = new Calculator();
    echo $calculate->calculate();
?>