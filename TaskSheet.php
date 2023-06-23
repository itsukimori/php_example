<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/Task.php';

class TaskSheet
{
    public $tasks = [];
    public function addTask(Task $hoge)
    {
        $this->tasks[] = $hoge;
        echo $hoge->name;
    }

}