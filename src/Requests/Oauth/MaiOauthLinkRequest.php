<?php
/**
 * 移动端授权链接
 *
 * @link https://open.pinduoduo.com/application/document/browse?idStr=BD3A776A4D41D5F5
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2020/06/27
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests\Oauth;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class MaiOauthLinkRequest implements Request
{

    private $gateway = 'https://mai.pinduoduo.com/h5-login.html';

    private $responseType;  // 授权类型，值为 code

    private $redirectUri; // 回调地址

    private $state; // 自定义参数

    private $view; // web或h5, 默认web

    private $apiParams = [];


    public function setResponseType($val)
    {
        $this->responseType = (string)$val;
        $this->apiParams['response_type'] = (string)$val;
    }

    public function setRedirectUri($val)
    {
        $this->redirectUri = (string)$val;
        $this->apiParams['redirect_uri'] = (string)$val;
    }

    public function setState($state)
    {
        $this->state = (string)$state;
        $this->apiParams['state'] = (string)$state;
    }

    public function setView($val)
    {
        $this->view = (string)$val;
        $this->apiParams['view'] = (string)$val;
    }

    /**
     * 获取授权地址
     *
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}