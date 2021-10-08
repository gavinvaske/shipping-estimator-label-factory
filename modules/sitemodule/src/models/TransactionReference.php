<?php

namespace modules\sitemodule\models;

class TransactionReference
{
    public $CustomerContext;

    /**
     * @param $CustomerContext
     */
    public function __construct($CustomerContext)
    {
        $this->CustomerContext = $CustomerContext;
    }


}