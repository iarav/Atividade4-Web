<?php

    class Aluno {
        private $nome;
        private $ra;
        private $sexo;
        private $idade;
        private $endereco;
        private $telefone;
        private $email;

        function Aluno(){
        }

        public function criarAluno($nome, $ra, $sexo, $idade, $endereco, $telefone, $email){
            $this->nome = $nome;
            $this->ra = $ra;
            $this->sexo = $sexo;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->email = $email;
        }

        public function getRA(){
            return $this->ra;
        }

        public function imprimirAluno($id){
            echo "<div class='item'>\n
                <p class='id'>$id</p>\n
                <p class='nome'>$this->nome</p>\n
                <p class='ra'>$this->ra</p>\n
                <p class='sexo'>$this->sexo</p>\n
                <p class='idade'>$this->idade</p>\n
                <p class='end'>$this->endereco</p>\n
                <p class='telefone'>$this->telefone</p>\n
                <p class='email'>$this->email</p>\n
            </div>";
        }
    }
    
    $nomedoarquivo = "dadosCadastro.txt";
    $modo = 'r+';
    $arrayAlunos = [];
    $qntAlunos = 0;
    $id = 1;

    $arquivo = fopen ($nomedoarquivo, $modo);
    if ($arquivo == false){
        $modo = 'a+';
        $arquivo = fopen ($nomedoarquivo, $modo);
        echo "<br> <br> <h4>O arquivo para listagem ainda não existe. <br> Arquivo foi criado agora!! <br> <br> RECARREGUE A PÁGINA E TENTE NOVAMENTE!</h4>";
    }

    while(true) {       
        $linha = fgets($arquivo);
        if ($linha==null) break;
        $dados = explode(" -- ", $linha);
        $aluno = new Aluno();
        $aluno->criarAluno($dados[0], $dados[1], $dados[2], $dados[3], $dados[4], $dados[5], $dados[6]);
        $arrayAlunos[$qntAlunos] = $aluno;
        $qntAlunos++;
    }

    function cmp($a, $b)
    {   
        $v1 = $a->getRA();
        $v2 = $b->getRA();

        if ($v1 == $v2) {
        return 0;
        }
        return ($v1 < $v2) ? -1 : 1;
    }

    usort($arrayAlunos, "cmp");

    foreach ($arrayAlunos as $i) {
        $i->imprimirAluno($id);
        $id++;
    }
?> 