<?php
/**
 * 生成红包推广链接
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.rp.prom.url.generate
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkRpPromUrlGenerateRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.rp.prom.url.generate';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $generate_short_url;    // 是否生成短链接。true-是，false-否，默认false

    private $p_id_list;             // 推广位列表，例如：["60005_612"]

    private $custom_parameters;     // 自定义参数

    private $generate_weapp_webview;// 是否唤起微信客户端， 默认false 否，true 是

    private $we_app_web_view_short_url; // 唤起微信app推广短链接

    private $we_app_web_wiew_url;   // 唤起微信app推广链接

    private $generate_we_app;       // 是否生成小程序推广

    private $channel_type;          // CPA新人红包，0-默认红包，2 – 新人红包，默认0

    private $apiParams = [];


    public function setGenerateShortUrl($val)
    {
        $this->generate_short_url = (bool)$val;
        $this->apiParams['generate_short_url'] = (bool)$val;
    }

    public function setPidList($val)
    {
        $this->p_id_list = @json_encode($val);
        $this->apiParams['p_id_list'] = @json_encode($val);
    }

    public function setCustomParameters($val)
    {
        $this->custom_parameters = (string)$val;
        $this->apiParams['custom_parameters'] = (string)$val;
    }

    public function setGenerateWeappWebview($val)
    {
        $this->generate_weapp_webview = (bool)$val;
        $this->apiParams['generate_weapp_webview'] = (bool)$val;
    }

    public function setWeAppWebViewShortUrl($val)
    {
        $this->we_app_web_view_short_url = (bool)$val;
        $this->apiParams['we_app_web_view_short_url'] = (bool)$val;
    }

    public function setWeAppWebWiewUrl($val)
    {
        $this->we_app_web_wiew_url = (bool)$val;
        $this->apiParams['we_app_web_wiew_url'] = (bool)$val;
    }

    public function setGenerateWeApp($val)
    {
        $this->generate_we_app = (bool)$val;
        $this->apiParams['generate_we_app'] = (bool)$val;
    }

    public function setChannelType($val)
    {
        $this->channel_type = (int)$val;
        $this->apiParams['channel_type'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}