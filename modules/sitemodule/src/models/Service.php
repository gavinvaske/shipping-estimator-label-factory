<?php

namespace modules\sitemodule\models;

class Service
{
    public $Code;
    public $Description;

    /**
     * @param $code
     * @param $description
     */
    public function __construct($code, $description)
    {
        $this->Code = $code;
        $this->Description = $description;
    }


}