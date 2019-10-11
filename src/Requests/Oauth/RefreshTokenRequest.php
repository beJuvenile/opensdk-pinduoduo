<?php
/**
 * 多多客刷新授权token
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/10/11
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests\Oauth;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class RefreshTokenRequest implements Request
{

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $grant_type = 'refresh_token';

    private $refresh_token; //

    private $state;         // 自定义参数

    private $apiParams = [];


    public function setRefreshToken($token)
    {
        $this->refresh_token = (string)$token;
        $this->apiParams['refresh_token'] = (string)$token;
    }

    public function setState($state)
    {
        $this->state = (string)$state;
        $this->apiParams['state'] = (string)$state;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        $this->apiParams['grant_type'] = $this->grant_type;

        return $this->apiParams;
    }

}