<?php

require('Smarty.class.php');

class view_smarty extends Smarty
{
    public function __construct()
    {
        // Smarty2.xのときは$this->Smarty();
        // $this->Smarty();のままだとSmarty3.xでエラーが発生
        // (SmartyException: Please use parent::__construct() to call parent constuctor in ...)
        parent::__construct();

        $this->template_dir = 'templates/';
        $this->compile_dir = 'templates_c/';
        $this->config_dir = 'configs/';
        $this->cache_dir = 'cache/';

    }
}
