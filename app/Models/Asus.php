<?php

namespace App\Models;

use App\Interfaces\IComputer;
use App\Kernel\Console;
use App\Exceptions\ComputerException;
//use App\Traits\Test;


class Asus extends Computer implements IComputer
{
//    use \App\Traits\Test;
    public function __construct()
    {
        $this
            ->setComputerName('HP my')
            ->setCpu('Intel Core I3')
            ->setRam('8 Gb');
    }
    public function idComp()
    {
        Console::printLine(hash('sha1',($this->getComputerName())));
    }
    public function start(){

    }
    public function stop(){

    }
    public function restart(){

    }
}
