<?php

namespace modules\sitemodule\models;

class UnitOfMeasurement
{
    public $Code;
    public $Description;

    public function __construct($code, $description = "") {
        $this->Code = $code;
        $this->Description = $description;
    }
}