<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio15Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function formTest(AcceptanceTester $I)
    {
          $I->amOnPage('/exercicio15');
          $I->see('Decaimento Radioativo');
          $I->seeElement('form');
          $I->fillField('massa_inicial', '0.5');
          $I->click('Enviar');
          $I->see('Tempo necessário para a massa ser menor que 0.10: 60 segundos.');//Para a resposta
    }
}
