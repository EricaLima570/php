<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio2Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function formexercicio2Test(AcceptanceTester $I)
    {   //teste apenas para o 10
        $I->amOnPage("/exercicio2");
        $I->see("Digite um número");
        $I->fillField("value1","10");
        $I->click("Enviar");
        $I->see("Número divisivel por 10");
        $I->see("Número divisivel por 5");
        $I->see("Número divisivel por 2");
        //teste apenas para o entrar no 5
        $I->fillField("value1","5");
        $I->click("Enviar");
        $I->see("Número divisivel por 5");
        //teste para entrar em 2
        $I->fillField("value1","2");
        $I->click("Enviar");
        $I->see("Número divisivel por 2");
        //teste para ser indivisivel para todos
        $I->fillField("value1","7");
        $I->click("Enviar");
        $I->see("7 Não é divisivel por 10,5 ou 2");
    }
}
