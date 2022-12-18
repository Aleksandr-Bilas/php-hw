<?php

use interface\LCD;
use interface\LCDLG;
use interface\LED;
use interface\LEDLG;

class LG implements TV
{
    public function createLCD(): LCD
    {
        return new LCDLG();
    }

    public function createLED(): LED
    {
        return new LEDLG();
    }
}