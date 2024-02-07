<?php
    class Person {
        // public é o default
        public const HUMANO = true; // const HUMANO = true;
        private $nome;
        protected $altura;
        public $corDosOlhos;

        // NOME
        function setNome($nome) {
            return $this->nome = $nome;
        }

        private function getNome() {
            return $this->nome;
        }

        function getPrivNome() {
            return $this->getNome();
        }

        // ALTURA
        function setAltura($altura) {
            return $this->altura = $altura;
        }

        protected function getAltura() {
            return $this->altura;
        }

        function printTracos() {
            echo "CARACTERÍSTICAS DO " . strtoupper($this->nome) . "<br>";
            echo "Nome: " . $this->nome . "<br>";
            echo "Altura: " . $this->altura . "<br>";
            echo "Cor dos olhos: " . $this->corDosOlhos . "<br>";
        }
    }
    
    class Professor extends Person {
        private $escola;
        public $disciplina;

        function setEscola($escola) {
            return $this->escola = $escola;
        }
    
        function printTrabalho() {
            echo "DADOS DO PROFESSOR " . strtoupper($this->getPrivNome()) . "<br>";
            echo "Disciplina: " . $this->disciplina . "<br>";
            echo "Escola: " . $this->escola . "<br>";
        }

        // function minhaAlturaProp() {
            //     echo $this->altura . "<br>";
        // }

        // function minhaAlturaFunc() {
        //     echo $this->getAltura() . "<br>";
        // }

        // function meuNome() {
        //     echo $this->getNome();
        // }


    }

    $joao = new Person;
    $joao->setAltura(1.90);
    $joao->setNome("João");
    $joao->corDosOlhos = "azul";
    // echo $joao->getAltura() . "<br>";
    // echo $joao::HUMANO . "<br>";
    // $joao->printTrabalho();

    $jean = new Professor;
    $jean->setNome("Jean");
    $jean->setAltura(1.78);
    $jean->corDosOlhos = "castanho";
    $jean->setEscola("Unicolégio");
    $jean->disciplina = "Matemática";

    $jean->printTracos();
    $jean->printTrabalho();
    // $jean->printTrabalho();
    // $jean->minhaAlturaProp();
    // $jean->minhaAlturaFunc();
    // $jean->meuNome();

    