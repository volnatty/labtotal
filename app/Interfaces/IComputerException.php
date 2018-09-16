<?php

interface iComputerException
{
    public function getMessage();

    public function getCode();

    public function __toString();

    public function __construct($message, $code=0);
}