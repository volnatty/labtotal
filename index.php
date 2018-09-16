<?php

use App\Models\Asus;
use App\Models\Computer;
use App\Models\MacBook;
use App\Test;

require_once ('bootstrap/autoload.php');
//try catch finally


//require_once (__DIR__.'/app/Kernel/Console.php');
//require_once (__DIR__.'/app/Interfaces/IComputer.php');
//require_once (__DIR__.'/app/Models/Computer.php');
//require_once (__DIR__.'/app/Models/Asus.php');
//require_once (__DIR__.'/app/Models/MacBook.php');

$asus = new Asus();//   МОЖНО так вместо USE
//$macbook = new MacBook();
$asus->start();
$asus ->printParams();
echo '<br>';
$asus -> idComp();
echo '<br>';
//$macbook ->printParams();
echo '<br>';
//$macbook -> idComp();
$asus->stop();
//echo $asus::someTrait();


//$test = new Test;
//$test->testing();