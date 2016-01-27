<?php

/**
 * Created by PhpStorm.
 * User: xin
 * Date: 2015/12/26
 * Time: 23:33
 */
define('SMARTY_DIR', LIBROOT . "/smarty/libs/");
require(SMARTY_DIR . "Smarty.class.php");
class View extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->template_dir = WEBROOT . "/template/";
        $this->compile_dir = SMARTY_DIR . "/templates_c/";
        $this->config_dir = SMARTY_DIR . "/configs/";
        $this->cache_dir = SMARTY_DIR . "/cache/";
    }
}