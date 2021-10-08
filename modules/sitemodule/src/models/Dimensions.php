<?php

namespace modules\sitemodule\models;

class Dimensions
{
    public $UnitOfMeasurement;
    public $Length;
    public $Width;
    public $Height;

    public function __construct($unitOfMeasurement, $length, $width, $height) {
        $this->UnitOfMeasurement = $unitOfMeasurement;
        $this->Length = $length;
        $this->Width = $width;
        $this->Height = $height;
    }
}