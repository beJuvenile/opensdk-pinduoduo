<?php
/**
 * 授权客户端
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/10/11
 * Time: 20:54
 */
namespace OpenSDK\PinDuoDuo;

use OpenSDK\PinDuoDuo\Libs\Format;
use OpenSDK\PinDuoDuo\Libs\Http;
use OpenSDK\PinDuoDuo\Interfaces\Request;
use OpenSDK\PinDuoDuo\Libs\Signer;

class OauthClient
{

    /**
     * 接口地址
     *
     * @var string
     */
    public $gateway = 'http://open-api.pinduoduo.com/oauth/token';

    /**
     * 是否需要签名
     *
     * @var bool
     */
    public $isSign = false;

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
        $params = array_merge([
            'client_id' => $this->appKey,
            'client_secret' => $this->appSecret,
        ], $this->request->getParams());

        if ($this->isSign)
            $params['sign'] = Signer::make($params, $this->appSecret);

        if (strtolower($this->request->requestType)=='post') {
            $headers = [
                'Content-Type: application/json'
            ];
            $result = Http::post($this->gateway, $params, $headers, 'json');
        } else {
            $result = Http::get($this->gateway, $params);
        }

        return strtolower($this->format)=='json' ? Format::deJSON($result) : Format::deSimpleXML($result);
    }




}