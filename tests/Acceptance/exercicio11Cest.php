<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio11Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function testExercicio11Page(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio11'); 
        $I->see('Tabuada'); 
        $I->seeElement('form'); 
        $I->seeElement('input[name="numero"]');
        $I->seeElement('input[type="submit"][value="Enviar"]');
    }
}