<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/Clock.php';

class AnalogClock extends Clock
{
    public function show()
    {
        $minuteHand = 90;
        $hourHand = 157.5;
        return "Tyousin: {$minuteHand} Tansin{$hourHand}";                                                                                
    }
}