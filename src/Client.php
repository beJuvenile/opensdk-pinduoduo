<?php
/**
 * 客户端
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 20:54
 */
namespace OpenSDK\PinDuoDuo;

use OpenSDK\PinDuoDuo\Libs\Format;
use OpenSDK\PinDuoDuo\Libs\Http;
use OpenSDK\PinDuoDuo\Interfaces\Request;
use OpenSDK\PinDuoDuo\Libs\Signer;

class Client
{

    /**
     * 接口地址
     *
     * @var string
     */
    public $gateway = 'http://gw-api.pinduoduo.com/api/router';

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
     * API协议版本号，默认为V1，可不填
     */
    public $version = 'V1';

    /**
     * 数据类型
     *
     * @var string
     */
    public $format = 'JSON';

    /**
     * request对象
     * 
     * @var object
     */
    public $request;

    /**
     * Access Token
     *
     * @var string
     */
    public $accessToken;


    public function __construct($appKey='', $appSecret='')
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }
    
    /**
     * 设置请求对象
     * 
     * @param Request $request
     * @param string $accessToken
     */
    public function setRequest(Request $request, $accessToken='')
    {
        $this->request = $request;
        $this->accessToken = $accessToken;
    }

    /**
     * 执行
     *
     * @return mixed
     */
    public function execute()
    {
        $sysParams = [
            'type'      => $this->request->method,
            'client_id' => $this->appKey,
            'timestamp' => (string)time(),
            'data_type' => $this->format,
            'version'   => $this->version,
        ];
        if ($this->accessToken)
            $sysParams['access_token'] = $this->accessToken;
        $params = array_merge($sysParams, $this->request->getParams());

        $params['sign'] = Signer::make($params, $this->appSecret);

        if (strtolower($this->request->requestType)=='post') {
            $result = Http::post($this->gateway, $params);
        } else {
            $result = Http::get($this->gateway, $params);
        }

        return strtolower($this->format)=='json' ? Format::deJSON($result) : Format::deSimpleXML($result);
    }




}