<?php
/**
 * 获取Access Token
 *
 * @link: https://open.pinduoduo.com/application/document/api?id=pdd.pop.auth.token.create
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2020/06/27
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddPopAuthTokenCreateRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.pop.auth.token.create';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $code;   // 授权code

    private $apiParams = [];


    public function setCode($val)
    {
        $this->code = (string)$val;
        $this->apiParams['code'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        $this->apiParams['grant_type'] = 'authorization_code';
        return $this->apiParams;
    }

}