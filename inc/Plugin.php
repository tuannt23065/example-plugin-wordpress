<?php

namespace DNG;

use DNG\Traits\Singleton;
use DNG\Settings;

class Plugin {

    use Singleton;

    protected function __construct() {
        $this->setupHooks();
    }

    protected function setupHooks() {
        Settings::get_instance();
    }

}