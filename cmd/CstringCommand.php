<?php

namespace Cstring;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

use Cstring\Cstring;

class CstringCommand extends Command{

    protected function configure(){
        $this->setName("Cstring:Cstring")
                ->setDescription("Converting string to upper/alternate upper/csv.")
                ->addArgument('string', InputArgument::REQUIRED, 'Give string to convert!)');
    }

    protected function execute(InputInterface $input, OutputInterface $output){

        $input = $input->getArgument('string');

        $string = new Cstring();
        # UPPERCASE
        $_u_result = $string->toUpperCase($input);
        $output->writeln($_u_result); 

        # ALTERNATE UPPERCASE
        $_a_result = $string->alternate_upper_lower_case($input);
        $output->writeln($_a_result); 
        
        # CSV FILE
        $_c_result = $string->generate_csv($input);
        $output->writeln($_c_result);
        
        return 1;
    }

}