<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio8Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function TitlExercicio8Test(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio8');
        $I->seeInTitle('Exercício 8');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        
        $I->amOnPage('/exercicio8');

        $I->fillField('numero', '3');
        $I->click('Enviar');

        $I->fillField('numero', '4');
        $I->click('Enviar');
    }
}