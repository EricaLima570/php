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
        
        $I->fillField('number', '57');
        $I->click('Enviar');
  
        $I->fillField('number', '0');
        $I->click('Enviar');
    }
}
