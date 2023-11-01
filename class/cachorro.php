<?php

    class cachorro
    {

        private $nome;
        private $raca;
        private $cor;
        private $peso;
        private $idade;
        private $dono;

        public function __construct()
        {



        }

        public function create($_nome, $_raca, $_cor, $_peso, $_idade, $dono)
        {

            $this->nome = $_nome;
            $this->raca = $_raca;
            $this->cor = $_cor;
            $this->peso = $_peso;
            $this->idade = $_idade;
            $this->dono = $_dono;

        }

        //*funções específicas da classe 

        public function latir()
        {

            echo "$this->nome fez tuc tuc tuc";

        }

        public function set_Nome($_nome)
        {
            $this->nome = $_nome;
        }

        public function set_Raca($_raca)
        {
            $this->raca = $_raca;
        }

        public function get_Nome()
        {
            return $this->nome;
        }

        public function get_Raca()
        {
            return $this->raca;
        }

        public function latir()
        {

            echo "$this->nome fez tuc tuc tuc";

        }

        public function rosnar($_pessoa)
        {

            echo $htis->dono == $_pessoa ? 
                                "$this->nome fez tuc tuc e abanou o rabo.<br>" : 
                                "$this->nome não fez tuc tcu para você.<br>";

        }

    }

?>