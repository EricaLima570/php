<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio4Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function exercicio4Test(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio4");
        $I->see("Digite o primeiro valor");
        $I->fillField("value1","2");
        $I->see("Digite o segundo valor");
        $I->fillField("value2","1");
        $I->see("Digite o terceiro valor");  
        $I->fillField("value3","3"); 
        $I->click("Enviar");
        $I->see("Ordem decrescente: 3, 2, 1"); 
    }
}
