<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>PHP</h1>
    <?php 
        require_once dirname(__FILE__) . '/DigitalClock.php';

        $currentTime = strtotime('2018-08-22 17:04');
        $digitalClock = new DigitalClock();
        $digitalClock->setTime($currentTime);
        echo $digitalClock->show();
    ?>
</body>
</html>