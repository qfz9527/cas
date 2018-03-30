<?php
/**
 *============================
 * author:Farmer
 * time:2018/2/24
 * function:
 *============================
 */

namespace app\common;


use icf\lib\db;

abstract class BasePlatform {
    protected $cookie = '';
    protected $platApi = 'BasePlatform';
    protected $httpRequest;

    public function __construct($param) {
        if (is_string($param)) {
            $this->cookie = $param;
        } else {
            $data = db::table('platform_account')->where($param)->find();
            $this->cookie = $data['pu_cookie'];
        }
    }

    abstract public function VerifyAccount();

    /**
     * 验证操作
     * @param $action
     * @return mixed
     */
    abstract public function VerifyAction($action);

    /**
     * 验证操作结果
     * @param $actionRet
     * @return mixed
     */
    abstract public function VerifyActionResult($actionRet);

    /**
     * 是否可以登录
     * @return mixed
     */
    abstract public function IsLogin();
}