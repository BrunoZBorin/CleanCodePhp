<?php

namespace Escola\Arquitetura\Aplicacao\Aluno\MatricularAluno;

use Escola\Arquitetura\Dominio\Aluno\RepositorioAluno;
use Escola\Arquitetura\Dominio\Aluno\Aluno;

class MatricularAluno
{
    private RepositorioAluno $repositorioAluno;

    public function __construct(RepositorioAluno $repositorioAluno)
    {
        $this->repositorioAluno = $repositorioAluno;
    }

    public function executa(MatricularAlunoDto $alunoDto): void
    {
        $aluno = Aluno::comCpfNomeEmail($alunoDto->cpf, $alunoDto->nome, $alunoDto->email);
        $this->repositorioAluno->adicionar($aluno);
    }
}