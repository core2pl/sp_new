<?php

namespace core;

class core2 {

    protected  static $instance = null;

    public function __construct() {
        $this->in = new \core\in();
        $this->db = new \core\db();
        $this->router = new \core\router();
        $this->bundler = new \core\bundler();
        $this->em = new \core\em();
        $this->out = new \core\out();

        $this->bundles = array(
            new \core2pl\foo\foo()
        );

        core2::$instance = $this;
    }

    public static function get() {
        return core2::$instance;
    }
} 