<?php
declare(strict_types=1);

abstract class Clock
{
    protected $time;

    abstract public function show();
    
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    public function getTime()
    {
        return $this->time;
    }
}