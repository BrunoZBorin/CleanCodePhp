<?php   

namespace Escola\Arquitetura\Dominio\Aluno;

interface CifradorSenhas
{
    public function cifrar(string $senha): string;
    public function verificar(string $senhaEmTexto, string $senhaCifrada): bool;
}