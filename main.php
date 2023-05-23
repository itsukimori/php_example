<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php sample</title>
</head>
<body>
    <h1>sample PHP</h1>
    <?php 
        require_once dirname(__FILE__) . '/Task.php';
        $task = new Task();

        $task->setName('少しだけ疲れた。');
        echo 'Task Name: ', $task->getName(), '<br>';

        $task->setProgress(150);
        echo 'Task Progress: ', $task->getProgress(), '<br>';
    ?>
</body>
</html>