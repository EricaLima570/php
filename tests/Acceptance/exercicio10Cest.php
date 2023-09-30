<?php


namespace Tests\Acceptance;

use Codeception\Template\Acceptance;
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
    public function Exercicio10backTest(AcceptanceTester $I){
        $I->amOnPage("/Exercicio10"); // Altere esta URL conforme necessário

        // Insira 20 números separados por vírgula no campo de entrada
        $I->fillField('#value', '1,2,-3,4,-5,6,7,-8,9,-10,11,12,-13,14,-15,16,17,-18,19,-20');
        $I->click('Enviar');

        // Verifique os resultados esperados
        $I->see('A soma dos números positivos é: 118');
        $I->see('O total de números negativos é: 8');
    }
}
