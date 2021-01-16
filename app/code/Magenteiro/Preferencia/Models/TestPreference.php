<?php
namespace Magenteiro\Preferencia\Models;

use Magenteiro\PrimeiroModulo\Console\Command\TestCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestPreference extends TestCommand 
{
    protected function execute(InputInterface $input, OutputInterface $output) : void
    {
        $output->writeln('TESTE preference');
        $output->writeln($this->formatText('>','<'));
    }

}