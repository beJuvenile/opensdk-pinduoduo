<?php
/**
 * 刷新Access Token
 *
 * @link: https://open.pinduoduo.com/application/document/api?id=pdd.pop.auth.token.refresh
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2020/06/27
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddPopAuthTokenRefreshRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.pop.auth.token.refresh';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $refreshToken;   // refresh_token

    private $apiParams = [];


    public function setRefreshToken($val)
    {
        $this->refreshToken = (string)$val;
        $this->apiParams['refresh_token'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        $this->apiParams['grant_type'] = 'refresh_token';
        return $this->apiParams;
    }

}