<?php

namespace Escola\Arquitetura\Infra\Aluno;

use Escola\Arquitetura\Dominio\Aluno\CifradorSenhas;

class CifradorSenhasPhp implements CifradorSenhas
{
    public function cifrar(string $senha): string
    {
        return password_hash($senha, PASSWORD_ARGON2ID);
    }

    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool
    {
        return password_verify($senhaEmTexto, $senhaCifrada);
    }

}