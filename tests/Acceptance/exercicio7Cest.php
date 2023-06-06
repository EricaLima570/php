<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class exercicio7Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function profexercicio7frontendTest(AcceptanceTester $I)
    { 
        $I->amOnPage("/exercicio7");
        $I->see("Exercicio 7");
        $I->see("Insira o nome do livro e selecione o tipo do usuario:Professor ou Aluno");
        $I->see("Digite o nome do livro:");
        $I->fillField("name","Coraline");
        $I->see("Selecione o usuário");   
        $I->selectOption("form select[name=user]","Professor");
        $I->seeInField("#user", 'Professor');
        $I->click("Enviar");
    }
    public function alunoexercicio7frontendTest(AcceptanceTester $I)
    { 
        $I->amOnPage("/exercicio7");
        $I->see("Exercicio 7");
        $I->see("Insira o nome do livro e selecione o tipo do usuario:Professor ou Aluno");
        $I->see("Digite o nome do livro:");
        $I->fillField("name","Coraline");
        $I->see("Selecione o usuário");   
        $I->selectOption("form select[name=user]","Aluno");
        $I->seeInField("#user", 'Aluno');
        $I->click("Enviar");
    }
}
