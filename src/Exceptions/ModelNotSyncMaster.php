<?php

namespace Stancl\Tenancy\Exceptions;

use Exception;

class ModelNotSyncMaster extends Exception
{
    public function __construct(string $class)
    {
        parent::__construct("Model of $class class is not an SyncMaster model. Make sure you're using the central model to make changes to synced resouces when you're in the central context");
    }
}