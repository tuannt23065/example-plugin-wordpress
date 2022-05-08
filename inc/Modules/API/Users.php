<?php

namespace DNG\Modules\API;

use DNG\Traits\Singleton;

class Users {
    
    use Singleton;

    protected function __construct() {
        $this->setupHooks();
    }

    protected function setupHooks() {
        
    }

}