<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/12
 * Time: 1:13
 */



//回调函数
function long_call_back($matches )
{
    $path = __ENTER_GOD__.'/'.$matches[0];

    $oss = new \Plugin\AliOss();

    $ss = $oss->ali_oss_upload($path,$matches[0]);

    return $ss;
}