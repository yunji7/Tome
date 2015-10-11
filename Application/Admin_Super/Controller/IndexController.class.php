<?php
namespace Admin_Super\Controller;
use Think\Controller;
class IndexController extends FatherController {
    public function index(){


        parent::index();


//        $this->assign("editor",);

        $this->display();
    }



}