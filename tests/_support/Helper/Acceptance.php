<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
    public function seeFullUrlEquals($expected)
    {
        $actual = $this->getModule('WebDriver')->webDriver->getCurrentURL();
        $this->assertEquals($expected, $actual);
    }
}
