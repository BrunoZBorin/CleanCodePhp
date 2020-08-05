<?php

namespace Escola\Arquitetura\Testes\Dominio;

use Escola\Arquitetura\Dominio\Aluno\Email;

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testEmailFormatoInvalido()
    {

        $this->expectException(\InvalidArgumentException::class);
        new Email('email imválido');

    }

    public function testEmailFormatoString()
    {
        $email = new Email('exemplo@exemplo.com');
        $this->assertSame('exemplo@exemplo.com', (string) $email);
    }
    
}