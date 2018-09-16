<?php

namespace App\Models;

use App\Kernel\Console;
use App\Exceptions\ComputerException;

abstract class Computer
{

    /*
     * computer name
     * @var $name
     */
    private $name;
    /**
     * Computer CPU name
     * @var string $cpu
     * */

    private $cpu;
    /**
     * memory size
     * @var string $ram
     */
    private $ram;
    /*
     * @var boolean $isEnabled
     */
    public $isEnabled=false;
    /*
     * Getters
     */
//    abstract public function getComputerName();
//    abstract public function getCpu();
//    abstract public function getRam();

    /*
     * Setters
     */
//    abstract protected function setComputerName($name);
//    abstract protected function setCpu($cpu);
//    abstract protected function setRam($ram);
    public function start()
    {
        try {
            if ($this->$isEnabled) {
                throw new ComputerException(ComputerException::$MESSAGES[1]);
            }
            $this->isEnabled = !$this->isEnabled;
            console::printLine('turn on','success');
        } catch (ComputerException $e){
            console::printline($e->getMessage(),console::$faill);
        }

    }

    public function stop()
    {
        try {
            if (!$this->$isEnabled) {
                throw new ComputerException(ComputerException::$MESSAGES[2]);
            }
            $this->isEnabled = !$this->isEnabled;
            console::printLine('turn off','success');
        } catch (ComputerException $e){
            console::printline($e->getMessage(),console::$faill);
        }
    }

    public function restart()
    {
        //
    }

    public function getComputerName()
    {
        return $this->name;
    }
    public function getCpu()
    {
        return $this->cpu;
    }
    public function getRam()
    {
        return $this->ram;
    }
    public function printParams()
    {
        Console::printLine('-----', Console::$warning);
        Console::printLine($this->getComputerName());
        Console::printLine($this->getRam());
        Console::printLine($this->getCpu());
        Console::printLine('......',Console::$warning);
//        print "Name: {$this->getComputerName()}" .PHP_EOL
//            ."CPU: {$this->getCpu()}".PHP_EOL
//            ."RAM: {$this->getRam()}".PHP_EOL;
    }

    /*
    * @param string $name
    * @return Computer
    */
    protected function setComputerName($name)
    {
        $this->name = $name;
        return $this;
    }
    /*
     * @param string CPU
     * @return cpu
     */
    protected function setCpu($cpu)
    {
        $this->cpu = $cpu;
        return $this;
    }
    /*
     * @param string $ram
     * @return Ram
     */
    protected function setRam($ram)
    {
        $this->ram = $ram;
        return $this;
    }

    abstract public function idComp();

}
