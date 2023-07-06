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

        //Eu vejo o titulo "Exercicio 2"
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

        //criando array associativo em php para os meses:
         $indicemes=array(  
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 =>'Outubro',
            11 =>'Novembro',
            12 =>'Dezembro',
        );
        //função para percorrer os vaores do array mes
        foreach ($indicemes as $value1){
            $I->fillField('value1', '$value1');
            $I->click('Enviar');
    }
    }
}
