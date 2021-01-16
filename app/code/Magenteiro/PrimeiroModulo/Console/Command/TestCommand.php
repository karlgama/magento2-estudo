<?php

namespace Magenteiro\PrimeiroModulo\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected function configure() : void
    {
        $this->setName('magenteiro:teste')
        ->setDescription("Primeiro comando");
        parent::configure();

    }

    protected function execute(InputInterface $input, OutputInterface $output) : void
    {
        $output->writeln('Olá terminal');
        $output->writeln($this->formatText('>','<'));
    }

    public function formatText($prefix, $suffix) : string
    {
        return $prefix . "SOME TEXT" . $suffix;
    }
}