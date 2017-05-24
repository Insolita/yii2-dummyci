<?php
/**
 * Created by solly [25.05.17 6:20]
 */

namespace tests\functional;

use tests\FunctionalTester;

class MydummyCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->wantToTest('CI Functional module test work');
        $I->amOnPage('mydummy/default/index');
        $I->see('Success', 'h1');
        $I->see('Dummy Module', '#data');
    }
}
