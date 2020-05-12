<?php

class Computer
{
    private $RAM;
    private $GPU;
    private $CPU;
    private $SSD;
    private $case;
    private $keyboard;
    private $mouse;
    private $screen;
    private $MB;
    private $headphones;

    public function __construct(
        int $RAM,
        string $GPU,
        float $CPU,
        int $SSD,
        string $case,
        string $keyboard,
        string $mouse,
        float $screen,
        string $MB,
        string $headphones
    ) {
        $this->RAM = $RAM;
        $this->GPU = $GPU;
        $this->CPU = $CPU;
        $this->SSD = $SSD;
        $this->case = $case;
        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
        $this->screen =  $screen;
        $this->MB = $MB;
        $this->headphones = $headphones;
    }

    public function getRAM()
    {
        return $this->$RAM . "GB";
    }

    public function getGPU()
    {
        return $this->$GPU;
    }

    public function getCPU()
    {
        return $this->$CPU . "GHz";
    }

    public function getSSD()
    {
        return $this->$SSD . "MB";
    }

    public function getCase()
    {
        return $this->$case;
    }

    public function getKeyboard()
    {
        return $this->$keyboard;
    }

    public function getMouse()
    {
        return $this->$mouse;
    }

    public function getScreen()
    {
        return $this->$screen;
    }

    public function getMB()
    {
        return $this->$MB;
    }

    public function getHeadphones()
    {
        return $this->$headphones;
    }
    public function printSummary()
    {
        echo "RAM:". $this->RAM;
        echo "GPU:". $this->GPU;
        echo "CPU:". $this->CPU;
        echo "SSD:". $this->SSD;
        echo "case:". $this->case;
        echo "keyboard:". $this->keyboard;
        echo "mouse:". $this->mouse;
        echo "screen:". $this->screen;
        echo "MB:". $this->MB;
        echo "headphones:". $this->headphones;
    }
}
