<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio16Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('exercicio16'); // Substitua pelo caminho correto
        $I->see('Verificador de Números Pares e Ímpares');
        
        // Preencha os campos com números de 1 a 15 para teste
        $I->fillField("input[name='numero1']", 1);
        $I->fillField("input[name='numero2']", 2);
        $I->fillField("input[name='numero3']", 3);
        $I->fillField("input[name='numero4']", 4);
        $I->fillField("input[name='numero5']", 5);
        $I->fillField("input[name='numero6']", 6);
        $I->fillField("input[name='numero7']", 7);
        $I->fillField("input[name='numero8']", 8);
        $I->fillField("input[name='numero9']", 9);
        $I->fillField("input[name='numero10']", 10);
        $I->fillField("input[name='numero11']", 11);
        $I->fillField("input[name='numero12']", 12);
        $I->fillField("input[name='numero13']", 13);
        $I->fillField("input[name='numero14']", 14);
        $I->fillField("input[name='numero15']", 15);

        $I->click('Enviar');
        
    }
}
