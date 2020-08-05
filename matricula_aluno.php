<?php

use Escola\Arquitetura\Dominio\Aluno\Aluno;
use Escola\Arquitetura\Infra\Aluno\RepositorioAlunoMemoria;

require 'vendor/autoload.php';

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];
$ddd = $argv[4];
$numero = $argv[5];

$aluno = Aluno::comCpfNomeEmail($cpf, $nome, $email)->adicionaTelefone($ddd, $numero);
$repositorio = new RepositorioAlunoMemoria();
$repositorio->adicionar($aluno);