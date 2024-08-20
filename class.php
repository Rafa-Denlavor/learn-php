<?php

class Aluno
{
    public $nome;
    public $idade;
    public $serie;
    # Acessada somente pela classe herdada
    protected $cpf;

    public function __construct($nome, $idade, $serie, $cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->serie = $serie;
        $this->registrationDate = date('d/m/Y');
        $this->cpf = $cpf;

    }

    public function message()
    {
        return "Aluno cadastrado!";
    }
}

$aluno1 = new Aluno(nome: "Rafaella", idade: 21, serie: '3C', cpf: "000.000.000-00");

echo "Nome: " . $aluno1->nome . PHP_EOL;
echo "Idade: " . $aluno1->idade . PHP_EOL;
echo "Série: " . $aluno1->serie . PHP_EOL;
echo "Mensagem: " . $aluno1->message() . PHP_EOL;
echo "Registrado em: " . $aluno1->registrationDate . PHP_EOL;