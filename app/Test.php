<?php
namespace App;
use App\Exceptions\ComputerException;

class Test
{
    public function testing()
    {
        try{
            try{
                throw new ComputerException('foo!');
            } catch (ComputerException $e){
                throw $e;
            }
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }
    }
}