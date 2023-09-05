<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio10Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio10Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio10");
        $I->see("Exercicio 10");
        $I->fillField("value","1,2,-3,6,-20,8,-4,30,56,3,-1,5,7,9,-34,-6,-7,-36,-70,47");
        $I->click('Enviar');
    }
}
