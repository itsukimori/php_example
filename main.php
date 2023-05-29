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
        require_once dirname(__FILE__) . '/ShoppingPoint.php';

        class WeekDayPoint
        {
            public function addWeekDayPoint(string $youbi)
            {
                if ($youbi === 'Fri') {
                    ShoppingPoint::countUpPoint();
                }
            }    
        }
        function addPricePoint(int $price)
        {
            if ($price >= 1000) {
                ShoppingPoint::countUpPoint();
            }
        }
        ShoppingPoint::$point = 0;
        ShoppingPoint::countUpPoint();

        $weekDayPoint = new WeekDayPoint();
        $weekDayPoint->addWeekDayPoint('Fri');

        addPricePoint(1500);

        echo '購入ポイントは：　' , ShoppingPoint::$point;
    ?>
</body>
</html>