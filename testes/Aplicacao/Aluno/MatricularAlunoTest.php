<?php

namespace Escola\Arquitetura\Testes\Aplicacao\Aluno;

use Escola\Arquitetura\Aplicacao\Aluno\MatricularAluno\MatricularAluno;
use Escola\Arquitetura\Aplicacao\Aluno\MatricularAluno\MatricularAlunoDto;
use Escola\Arquitetura\Infra\Aluno\RepositorioAlunoMemoria;
use Escola\Arquitetura\Dominio\Aluno\Cpf;   
use PHPUnit\Framework\TestCase;

class MatricularAlunoTest extends TestCase
{
    public function testAddAlunoRepositorio()
    {
        $matriculaAluno = new MatricularAlunoDto(
            "313.313.313-22",
            "Teste",
            "email@email.com"
        );

        $repositorioAluno = new RepositorioAlunoMemoria();
        $useCase = new MatricularAluno($repositorioAluno);
        $useCase->executa($matriculaAluno);

        $aluno = $repositorioAluno->buscarPorCpf(new Cpf('313.313.313-22'));
        $this->assertSame('Teste', (string) $aluno->nome());
        $this->assertSame('email@email.com', (string) $aluno->email());
        $this->assertEmpty($aluno->telefones());

    }
}