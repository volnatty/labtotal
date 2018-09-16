<?php

namespace App\Exceptions;

use App\Interfaces\IComputerException;


class ComputerException extends \Exception implements IComputerExeption
{
    protected $message;
    protected $code;
    public static $MESSAGES= [
        0 =>'ok workinq',
        1 =>'already ON',
        2 =>'already OFF'
        ];
    public function __construct($message = null, $code = 0)
    {
        $this->message = $message;
        $this->code = $code;
    }
}