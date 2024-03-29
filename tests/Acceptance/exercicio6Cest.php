<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio6Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function TitleExercicio6Test(AcceptanceTester $I)
    {
        //Eu estou na página "exercicio 6"
        $I->amOnPage('/exercicio6');

        //Eu vejo "Exercicio 6" em h1
        $I->seeInTitle('Exercício 6');
    }

    
    public function formExercicio6Test(AcceptanceTester $I)
    {
        /**
         * Ler um número inteiro entre 1 e 12 e escrever
         * o mês correspondente. Caso o número seja
         * fora desse intervalo, informar que não existe
         * mês com este número
         */
        $I->amOnPage('/exercicio6');
        
        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","1");
        $I->click("Enviar");
        $I->see("Janeiro");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","2");
        $I->click("Enviar");
        $I->see("Fevereiro");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","3");
        $I->click("Enviar");
        $I->see("Março");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","4");
        $I->click("Enviar");
        $I->see("Abril");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","5");
        $I->click("Enviar");
        $I->see("Maio");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","6");
        $I->click("Enviar");
        $I->see("junho");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","7");
        $I->click("Enviar");
        $I->see("Julho");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","8");
        $I->click("Enviar");
        $I->see("Agosto");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","9");
        $I->click("Enviar");
        $I->see("Setembro");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","10");
        $I->click("Enviar");
        $I->see("Outubro");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","11");
        $I->click("Enviar");
        $I->see("Novembro");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","12");
        $I->click("Enviar");
        $I->see("Dezembro");

        $I->see("Digite um valor entre 1 e 12");
        $I->fillField("value1","13");
        $I->click("Enviar");
        $I->see("Não corresponde a um Mês válido");
    }
}