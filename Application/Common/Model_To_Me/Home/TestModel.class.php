<?php


namespace Common\Model_To_Me\Home;

use Think\Model;

class TestModel extends Model
{


    /**
     * @var array  自动验证
     */
    protected $_validate = array(


    //array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
        array('aaa', 'require', '不能为空'),
    );


    /**
     * @var array 自动完成
     */
    protected $_auto = array(


        // array(完成字段1,完成规则,[完成条件,附加规则]),
        array('xxx', 55),
    );
}