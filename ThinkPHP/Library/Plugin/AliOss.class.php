<?php
/**
 * Created by PhpStorm.
 * User: android
 * Date: 2015/10/9
 * Time: 13:45
 */


namespace Plugin;

use Plugin\Alioss\Sample_base;
use Think\Controller;
use Think\Exception;


class AliOss
{
    protected $bucket;
    protected $oss;

    function __construct()
    {


        $this->bucket = Sample_base::get_bucket_name();
        $this->oss = Sample_base::get_oss_client();
        Sample_base::create_bucket();




//        var_dump($this->ali_oss_upload($file_path,OSS_TEST_BUCKET.'_/'.$file_path));
    }


    /**
     *  上传一个文件
     * @param $file_path
     * @param $object
     * @return array|void
     * @throws Exception   文件不存在
     * @throws \OSS_Exception
     */
    function ali_oss_upload($file_path ,$object)
    {
        if(!is_file($file_path)){
            return  E('文件不存在');
        }

        var_dump($file_path,$object);
        $options = array();
        $res =   $this->oss->upload_file_by_file($this->bucket, $object, $file_path, $options);

        return $res->header['oss-request-url'];

    }


    /**
     * 查找存在不存在
     * @param $object
     */
    function ali_oss_find($object)
    {
        $res = $this->oss->is_object_exist($this->bucket, $object);
        if ($res->status === 404) {
            return false;
        }
        if ($res->status === 200) {
            return true;
        }
    }


    /**
     * 文件删除
     * @param $object
     */
    function ali_oss_delete($object){
        if(!$this->ali_oss_find($object)){
            echo "文件不存在";
           return false;
        }

        $res = $this->oss->delete_object($this->bucket, $object);
        $msg = "删除object";
        \OSSUtil::print_res($res, $msg);
    }




}

