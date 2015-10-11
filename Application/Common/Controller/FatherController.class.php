<?php
namespace Common\Controller;

use Plugin\Ueditor;
use Think\Controller;



class  FatherController extends Controller {

    private $editor;

    function _init()
    {

        date_default_timezone_set("Asia/chongqing");
        header("Content-Type: text/html; charset=utf-8");



    }

    private function editor_get(){



        /**
         *  如果没有初始化
         */

        if( !isset($this->editor) ){
            $this->editor = new Ueditor(M__EDIT__);
        }
        return $this->editor;
    }


    /**
     * @return Ueditor   editor 对象  视图必须要有 模板变量
     */
    function editor_show($text=''){



        $this->assign('editor',$this->editor_get()->editor_show($text));
    }

     function editor_center(){
        $this->assign('center',$this->editor_get()->editor_center());
    }






}