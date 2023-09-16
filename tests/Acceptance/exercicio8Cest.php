<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Codeception\Example;

class exercicio8Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    
    public function TitleExercicio8Test(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio8');
        $I->seeInTitle('Exercício 8');
    }
    
    public function testExercicio8Input5(AcceptanceTester $I)
    {
        $input = 5;
        $I->amOnPage('/exercicio8');
        $I->see('Digite um número:');
        $I->fillField('#numero', $input);
        $I->click('Enviar');
        
        $I->see("Números de 1 até {$input}:");
        $I->see('1 2 3 4 5'); // Verifica os números listados
        $I->see('Produto dos números de 1 até 5:');
        $I->see('120'); // Verifica o produto calculado
    }

    public function testExercicio8Input0(AcceptanceTester $I)
    {
        $input = 0;
        $I->amOnPage('/exercicio8');
        $I->see('Digite um número:');
        $I->fillField('#numero', $input);
        $I->click('Enviar');
        
        $I->see('O número deve ser maior ou igual a 1.');
    }

    public function testExercicio8InputNegative(AcceptanceTester $I)
    {
        $input = -3;
        $I->amOnPage('/exercicio8');
        $I->see('Digite um número:');
        $I->fillField('#numero', $input);
        $I->click('Enviar');
        
        $I->see('O número deve ser maior ou igual a 1.');
    }
}