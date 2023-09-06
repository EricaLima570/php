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
        $I->see('Digite o número de vezes que deseja imprimir a palavra "SOL":');
        $I->fillField('#quantidade', '5');
        $I->click('Enviar');
        
    }
}