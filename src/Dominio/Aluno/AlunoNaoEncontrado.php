<?php

namespace Escola\Arquitetura\Dominio\Aluno;

use Escola\Arquitetura\Dominio\Aluno\Cpf;

class AlunoNaoEncontrado extends \DomainException
{
    public function __construct(Cpf $cpf)
    {
        parent::__construct("Aluno com CPF $cpf não encontrado");
    }
}
