<?php

use interface\LG;
use interface\Sony;

function clientCode(TV $factory)
{
    print $factory->createLED()->getLED();
    print $factory->createLCD()->getLCD();
}

echo "Your TV: \n";
$LGfactory = new LG();
\interface\clientCode($LGfactory);

echo "Your TV: \n";
$SonyFactory = new Sony();
clientCode($SonyFactory);