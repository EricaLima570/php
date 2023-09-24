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
    }
}
