<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio13Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio13Test(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio13'); 
       
        $I->fillField('number', '130');
        $I->click('Enviar');
        $I->see('Foram digitados 1 números entre 100 e 200.');
        
        $I->fillField('number', '57');
        $I->click('Enviar');
        $I->see('Foram digitados 0 números entre 100 e 200.');

  
        $I->fillField('number', '0');
        $I->click('Enviar');
    }
}
