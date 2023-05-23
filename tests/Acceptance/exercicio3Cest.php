<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio3Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    // tests
    public function exercicio3femininoTest(AcceptanceTester $I)
    {   
        //teste para feminino
        $I->amOnPage("/exercicio3");
        $I->see("Digite o seu Nome:");
        $I->fillField("name","Erica");
        $I->see("Digite a sua idade:");
        $I->fillField("age","22");
        $I->see("Digite seu sexo:");   
        $I->selectOption("form select[name=sex]","feminino");
        $I->seeInField("#sex", 'feminino');
        $I->click("Enviar");
        $I->see(" Erica: ACEITA"); 
    }
    public function exercicio3masculinoTest(AcceptanceTester $I)
    {   
        $I->amOnPage("/exercicio3");
        $I->see("Digite o seu Nome:");
        $I->fillField("name","Eric");
        $I->see("Digite a sua idade:");
        $I->fillField("age","22");
        $I->see("Digite seu sexo:");
        $I->selectOption("form select[name=sex]","masculino");
        $I->seeInField("#sex", 'masculino');
        $I->click("Enviar");
        $I->see(" Eric : NÃO ACEITA");
    }
}
