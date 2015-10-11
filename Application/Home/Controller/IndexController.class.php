<?php
namespace Home\Controller;

use Common\Controller\FatherController;
use Common\Model_To_Me\Home\LongtextModel;
use Plugin\AliOss;


class IndexController extends FatherController {



    public function index(){

        $this->_init();


        $editorValue = $_POST['editorValue'];




        if($editorValue != null){

             $this->write_sql($editorValue);

        }

        new AliOss();

        //显示编辑框
      $this->editor_show($editorValue);

        //控制中心
//      $this->editor_center();



      $this->display();


    }


    /**
     * @param $value 写入数据
     */
    function write_sql($value){
        $text = new LongtextModel();

        $text->value_s = $value;

        $data['text'] = $value;
        if (!$text->create($data)){// 对data数据进行验证
             exit($text->getError());}
        else{
             $text->add();
//            var_dump($value);
        }
    }





}