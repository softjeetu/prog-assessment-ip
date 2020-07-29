<?php

use Cstring\CstringCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

require_once  './vendor/autoload.php';

class CstringCommandTest extends \PHPUnit_Framework_TestCase{

    public function testCstringIsConverted(){

        $application = new Application();
        $application->add(new CstringCommand());

        $command = $application->find('Cstring:Cstring');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array(
            'command'      => $command->getName(),
            'string'       => 'Hello World!'
        ));  

        $this->assertRegExp('/^[a-zA-Z!\s]+$/', $commandTester->getDisplay());
    }

}