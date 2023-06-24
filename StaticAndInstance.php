<?php
declare(strict_types=1);

class Example
{
    public $name;
    public static function staticFunction()
    {
        return 'Hello world';
    }

    public function InstanceFunction(string $name)
    {
        return $this->name = $name . ' Hello world'; 
    }
}