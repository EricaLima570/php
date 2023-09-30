<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio12Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio12test(AcceptanceTester $I)
    {

        $I->amOnPage("/exercicio12");
        $I->fillField("palavra", 'Test');
        $I->click('Enviar');

        $I->see('Test');
        $I->see('Test Test'); 
        $I->see('Test Test Test'); 
        $I->see('Test Test Test Test'); 
    }
}
