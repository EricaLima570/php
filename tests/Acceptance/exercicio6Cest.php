<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio6Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function TitlExercicio6Test(AcceptanceTester $I)
    {
        //Eu estou na página "exercicio 6"
        $I->amOnPage('/exercicio6');

        //Eu vejo "Exercicio 6" em h1
        $I->seeInTitle('Exercício 6');
    }
}