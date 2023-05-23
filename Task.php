<?php
declare(strict_types=1);

class Task 
{
    public const PRIORITY_LOW = 0;
    public const PRIORITY_MIDDLE = 1;
    public const PRIORITY_HIGH = 2;

    private $name;
    private $progress;
    public $priority;
    
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getProgress(): int
    {
        return $this->progress;
    }

    public function setProgress(int $progress): void
    {
        if ($progress < 0) {
            $progress = 0;
        } elseif ($progress > 100) {
            $progress = 100;
        }
        $this->progress = $progress;
    }

    public function completeProgress(): void
    {
        $this->progress = 100;
    }

    public function clearProgress(): void
    {
        $this->progress = 0;
    }

    public function getPriorityAsString(): string
    {
        switch ($this->priority) {
            case self::PRIORITY_LOW :
                return 'LOW';
                break;
            case self::PRIORITY_MIDDLE :
                return 'MIDDLE';
                break;
            case self::PRIORITY_HIGH :
                return 'HIGH';
                break;
        }
    }
}