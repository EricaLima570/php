<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio18Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testVetoresNaoComuns(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio18");
        $I->see("Vetores Não Comuns");
        
        // Insira 10 números em cada vetor
        $I->fillField("#vetor1", "1,2,3,4,5,6,7,8,9,10");
        $I->fillField("#vetor2", "5,6,7,8,9,10,11,12,13,14");

        $I->click("Calcular Vetor Não Comum");

    }
}
