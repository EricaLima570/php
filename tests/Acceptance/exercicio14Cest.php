<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio14');

        $I->fillField('#alt_chico', '1.50');
        $I->fillField('#alt_juca', '1.10');

        $I->click('Calcular');
        $I->see("Serão necessários 1 anos para que Juca seja maior que Chico.");
    }
}
