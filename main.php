<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>PHP 0</h1>
    <?php 
       require_once dirname(__FILE__) . '/Task.php';

       $task01 = new Task();

       $task01->setName('test method in the house');
       $task01->setProgress(1290);
       $task01->setPriority(2);
       
       echo $task01->getName() . '<br>';
       echo $task01->getProgress() . '<br>';
       echo $task01->getPriorityAsString();
    ?>
</body>
</html>