<?php


use interface\LCD;
use interface\LED;

interface TV
{
    public function createLED(): LED;
    public function createLCD(): LCD;
}