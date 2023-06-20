<?php
declare(strict_type=1);

abstract class Clock
{
    protected $time;

    abstract public function show(): string; 

    public function setTime(int $time): void
    {
        return $this->time;
    }

    public function getTime(): string
    {
        return $this->time;
    }
}