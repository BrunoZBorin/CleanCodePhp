<?php

namespace Escola\Arquitetura\Aplicacao\Indicacao;

use Escola\Arquitetura\Dominio\Aluno\Aluno;

interface EnviaEmailIndicacao
{
    public function EnviaPara(Aluno $alunoIndicado): void;
}