<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>PHP 60</h1>
    <?php 
       require_once dirname(__FILE__) . '/ShoppingPoint.php';

       class WeekDayPoint
       {
        public function addWeekPoint(string $youbi)
        {
            if ($youbi === 'Fri') {
                ShoppingPoint::countUpPoint();
            }
        }
       }
       function addPricePoint(int $price)
       {
        if ($price >= 5000) {
            ShoppingPoint::$point += 5;
        }
       }
       
       ShoppingPoint::$point = 0;

       $weekDay = new WeekDayPoint();
       $weekDay->addWeekPoint('Fri');

       addPricePoint(6000);

       echo ShoppingPoint::$point;
    ?>
</body>
</html>