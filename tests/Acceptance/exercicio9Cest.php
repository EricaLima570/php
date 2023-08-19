<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio9Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio9Test(AcceptanceTester $I)
    {
    
        $I->amOnPage('/exercicio9');
        $I->see('Quantas vezes você quer imprimir a palavra SOL?');
        $I->click('Enviar');
        
    }
}