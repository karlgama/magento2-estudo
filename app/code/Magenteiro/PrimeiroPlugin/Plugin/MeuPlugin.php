<?php

namespace Magenteiro\PrimeiroPlugin\Plugin;

use \Magenteiro\PrimeiroModulo\Console\Command\TestCommand as TestCommand;

class MeuPlugin
{
    public function beforeFormatText(TestCommand $subject, $prefix, $suffix) : array
    {
        $prefix = '!!';
        $suffix = '<';
        return [$prefix, $suffix];
    }

    public function afterFormatText(TestCommand $subject, $result, $prefix, $suffix) : string
    {
        $result = str_replace('!!', '|z', $result);
        $result = str_replace('<', '|z', $result);
        return $result;
    }

    public function aroundFormatText(TestCommand $subject, callable $proceed, $prefix, $suffix)
    {
        $result = '@@@'. $proceed($prefix, $suffix);
        return $result;
    }
}