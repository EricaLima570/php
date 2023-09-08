<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Codeception\Example;

class exercicio8Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    
    public function TitlExercicio8Test(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio8');
        $I->seeInTitle('Exercício 8');
    }
    
    public function testExercicio8(AcceptanceTester $I, Example $data)
    {
        $I->amOnPage('/exercicio8');
        $I->see('Digite um número:');
        $I->fillField('#numero', $data['input']);
        $I->click('Enviar');

        if ($data['input'] >= 1) {
            $I->see("Números de 1 até {$data['input']}:");
            $I->see($data['result']); // Verifica os números listados
            $I->see("Produto dos números de 1 até {$data['input']}:");
            $I->see($data['product']); // Verifica o produto calculado
        } else {
            $I->see("O número deve ser maior ou igual a 1.");
        }
    }

    protected function inputProvider()
    {
        return [
            ['input' => 5, 'result' => '1 2 3 4 5', 'product' => '120'],
            ['input' => 0, 'result' => '0', 'product' => '1'], // Corrigido o produto para '1' quando o input é 0
            ['input' => -3, 'result' => '0', 'product' => '1'], // Corrigido o produto para '1' quando o input é -3
        ];
    }
}