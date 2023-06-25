<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>PHP 61</h1>
    <?php 
       require_once dirname(__FILE__) . '/DigitalClock.php';
       require_once dirname(__FILE__) . '/AnalogClock.php';
       require_once dirname(__FILE__) . '/Canvas.php';

       $canvas = new Canvas();

       $currentTime = strtotime('2018-08-22 17:15');

       $digitalClock = new DigitalClock();
       $digitalClock->setTime($currentTime);
       $canvas->drawClock($digitalClock);

       $analogClock = new AnalogClock();
       $analogClock->setTime($currentTime);
       $canvas->drawClock($analogClock);
    ?>
</body>
</html>