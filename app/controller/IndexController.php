<?php
use CORE\CONTROLLER\BaseController;

class IndexController
{
    public function index($params = null)
    {
        var_dump($params);
        die('Index/index/hello word!');
    }
}