<?php

namespace Escola\Arquitetura\Infra\Aluno;

use Escola\Arquitetura\Dominio\Aluno\CifradorSenhas;

class CifradorSenhasMd5 implements CifradorSenhas
{
    public function cifrar(string $senha): string
    {
        return md5($senha);
    }

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool
    {
        return md5($senhaEmTexto) === $senhaCifrada;
    }

}