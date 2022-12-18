<?php


use interface\LCD;
use interface\LCDSony;
use interface\LED;
use interface\LEDSony;

class Sony implements TV
{
    public function createLCD(): LCD
    {
        return new LCDSony();
    }
    public function createLED(): LED
    {
        return new LEDSony();
    }
}