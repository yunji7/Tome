<?php


namespace Common\Model_To_Me\Home;

use Think\Model;

class LongtextModel extends Model
{

    public $value_s;

    /**
     * @var array  自动验证
     */
    protected $_validate = array(


    //array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
//        array('aaa', 'require', '不能为空'),
    );


    /**
     * @var array 自动完成
     */
    protected $_auto = array(
        // array(完成字段1,完成规则,[完成条件,附加规则]),
        array('ali', 'getName',3,'callback'),
//        array('name','getName',3,'callback'),
    );

    function getName(){

        $result = preg_replace('%/Tome/%', '', $this->value_s);;

        if(!$result){
            return E('错误/Tome/');
        }


        /**
         *  调用公共的function
         */
        preg_replace_callback('%Public[\S]+\.jpg%', 'long_call_back',$result) ;



        if(!$result){
            return E('callback_3333123');
        }


        return  $this->value_s;
    }



}