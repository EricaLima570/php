<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio17Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTes(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio17');
        $numeros = '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20';
        $I->fillField('input#numeros', $numeros);
        $I->click('Enviar');

        $I->see('Maior Valor: 20');
        $I->see('Menor Valor: 1');
        $I->see('Percentual de Números Pares: 50%');
        $I->see('Média dos Elementos: 10.5');  

    }
}
