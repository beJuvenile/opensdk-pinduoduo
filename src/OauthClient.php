<?php
/**
 * 授权客户端
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2020/06/27
 * Time: 20:54
 */
namespace OpenSDK\PinDuoDuo;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class OauthClient
{

    /**
     * AppKey
     *
     * @var string
     */
    public $appKey;

    /**
     * AppSecret
     *
     * @var string
     */
    public $appSecret;

    /**
     * request对象
     * 
     * @var Request
     */
    public $request;


    public function __construct($appKey='', $appSecret='')
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }
    
    /**
     * 设置请求对象
     * 
     * @param Request $request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    /**
     * 执行
     *
     * @return mixed
     */
    public function execute()
    {
        $params = $this->request->getParams();
        $params['client_id'] = $this->appKey;

        return $this->request->getGateway() . '?' . http_build_query($params);
    }




}