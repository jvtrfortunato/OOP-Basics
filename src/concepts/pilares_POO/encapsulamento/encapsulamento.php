<?php

    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $valor) {
            $this->$attr = $valor;
        }
    }

    $pai = new Pai();
    //echo $pai->humor;
    echo $pai->sobrenome;
    $pai->sobrenome = 'Oliveira';
    echo '<br>';
    echo $pai->sobrenome;