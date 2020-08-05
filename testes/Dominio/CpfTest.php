<?php

namespace Escola\Arquitetura\Testes\Dominio;

use Escola\Arquitetura\Dominio\Aluno\Cpf;

use PHPUnit\Framework\TestCase;

class CpfTest extends TestCase
{
    public function testCpfFormatoInvalido()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Cpf('12134567899');

    }
    
    public function testCpfFormatoString()
    {
        $cpf = new Cpf('313.717.313-20');
        $this->assertSame('313.717.313-20', (string) $cpf);
    }
}