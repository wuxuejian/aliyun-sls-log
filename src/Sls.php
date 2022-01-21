<?php
namespace Wuxuejian\AliyunSLSLog;

class Sls
{
    public $appid;
    public function __construct($appid)
    {
        $this->appid = $appid;
    }
}