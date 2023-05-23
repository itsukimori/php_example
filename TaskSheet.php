<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/Task.php';

class TaskSheet
{
    public $tasks = [];

    public function addTask(Task $task): void
    {
        $this->tasks[] = $task;
        echo $task->name, '追加しました。', '<br>';
    }

    public function show(): void
    {
        foreach($this->tasks as $task) {
            if ($task->isCompleted()) {
                echo '<p style="color:red;">', $task->name, '</p>', '<br>';
            } else {
                echo $task->name, '<br>';
            }
        }
    }
}