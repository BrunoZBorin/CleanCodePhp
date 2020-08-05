<?php

namespace Escola\Arquitetura\Testes\Aluno\Dominio;

use Escola\Arquitetura\Dominio\Aluno\Telefone;

use PHPUnit\Framework\TestCase;

class TelefoneTest extends TestCase
{
    public function testTelefoneFormatoInvalido()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Telefone('998325555','14');

    }
    
    public function testTelefoneFormatoString()
    {
        $telefone = new Telefone('14','998325555');
        $this->assertSame('(14)998325555', (string) $telefone);
    }
}