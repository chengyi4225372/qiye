<?php

namespace app\index\controller;

use think\Db;

 class Index extends Common {


    //首页展示
    public function index() {
        return $this->fetch();
    }  

}
