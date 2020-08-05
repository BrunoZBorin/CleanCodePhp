<?php   

namespace Escola\Arquitetura\Dominio\Aluno;

use Escola\Arquitetura\Dominio\Aluno\Cpf;

interface RepositorioAluno
{
    public function adicionar(Aluno $aluno): void;
    public function buscarPorCpf(Cpf $cpf): Aluno;
    /** @return Aluno[] */
    public function buscarTodos(): array;

}