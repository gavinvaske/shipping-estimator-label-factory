<?php

namespace modules\sitemodule\models;

class Request
{
    public $SubVersion;
    public $TransactionReference;

    /**
     * @param $SubVersion
     * @param $TransactionReference
     */
    public function __construct($SubVersion, $TransactionReference)
    {
        $this->SubVersion = $SubVersion;
        $this->TransactionReference = $TransactionReference;
    }


}