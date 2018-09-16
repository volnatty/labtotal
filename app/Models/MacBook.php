<?php

namespace App\Models;
use App\Interfaces\IComputer;
use App\Kernel\Console;

class MacBook extends Computer implements IComputer
{
    public function __construct()
    {
        $this
            ->setComputerName('Apple Mac')
            ->setCpu('Cope I5')
            ->setRam('16 Gb');
    }
    public function idComp()
    {
        Console::printLine(hash('md5',($this->getComputerName())));

    }
}
