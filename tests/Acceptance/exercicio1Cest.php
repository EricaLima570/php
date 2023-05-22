<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio1Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function formexercicio1Test(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio1');
        //maior que 20
        $I->fillField("value1", "20");
        $I->fillField("value2", "1");
        $I->cliCk('Enviar');
        $I->See('O resultado foi: 29');
        //menor que 20
        $I->fillField("value1", "10");
        $I->fillField("value2", "10");
        $I->cliCk('Enviar');
        $I->See('O resultado foi: 15');
    }
}
