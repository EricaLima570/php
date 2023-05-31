<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio5Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function trianguloequilateroTest(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio5");
        $I->see("lado 1 do triangulo");
        $I->fillField("value1","10");
        $I->see("lado 2 do triangulo");
        $I->fillField("value2","10");
        $I->see("lado 3 do triangulo");  
        $I->fillField("value3","10"); 
        $I->click("Enviar");
        $I->see("Triângulo equilátero"); 
    }
    public function trianguloescalenoTest(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio5");
        $I->see("lado 1 do triangulo");
        $I->fillField("value1","5");
        $I->see("lado 2 do triangulo");
        $I->fillField("value2","7");
        $I->see("lado 3 do triangulo");  
        $I->fillField("value3","8"); 
        $I->click("Enviar");
        $I->see("Triângulo escaleno"); 
    }
    public function trianguloisoscelesTest(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio5");
        $I->see("lado 1 do triangulo");
        $I->fillField("value1","10");
        $I->see("lado 2 do triangulo");
        $I->fillField("value2","10");
        $I->see("lado 3 do triangulo");  
        $I->fillField("value3","12"); 
        $I->click("Enviar");
        $I->see("Triângulo isosceles"); 
    }
    public function nãotrianguloTest(AcceptanceTester $I)
    {
        $I->amOnPage("/exercicio5");
        $I->see("lado 1 do triangulo");
        $I->fillField("value1","1");
        $I->see("lado 2 do triangulo");
        $I->fillField("value2","2");
        $I->see("lado 3 do triangulo");  
        $I->fillField("value3","4"); 
        $I->click("Enviar");
        $I->see("Não é um triângulo"); 
    }
}
