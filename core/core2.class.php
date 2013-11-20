<?php

class core2 {

    protected  static $instance = null;

    public function __construct() {
        $this->in = new in();
        $this->db = new db();
        $this->router = new router();
        $this->bundler = new bundler();
        $this->em = new em();
        $this->out = new out();

        $this->bundles = array(
            new core2pl\foo\foo()
        );

        core2::$instance = $this;
    }

    public static function get() {
        return core2::$instance;
    }
} 