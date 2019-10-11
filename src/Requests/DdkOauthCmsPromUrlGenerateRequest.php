<?php
/**
 * 生成商城推广链接接口
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.oauth.cms.prom.url.generate
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkOauthCmsPromUrlGenerateRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.oauth.cms.prom.url.generate';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $generate_short_url;    // 是否生成短链接，true-是，false-否

    private $generate_mobile;       // 是否生成手机跳转链接。true-是，false-否，默认false

    private $multi_group;           // 单人团多人团标志。true-多人团，false-单人团 默认false

    private $custom_parameters;     // 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。

    private $generate_weapp_webview;// 是否唤起微信客户端， 默认false 否，true 是

    private $we_app_web_view_short_url; // 唤起微信app推广短链接

    private $we_app_web_view_url;   // 唤起微信app推广链接

    private $channel_type;          // 0, "1.9包邮"；1, "今日爆款"； 2, "品牌清仓"； 4,"PC端专属商城"

    private $p_id_list;             // 推广位列表，例如：["60005_612"]

    private $apiParams = [];


    public function setGenerateShortUrl($val)
    {
        $this->generate_short_url = (bool)$val;
        $this->apiParams['generate_short_url'] = (bool)$val;
    }

    public function setGenerateMobile($val)
    {
        $this->generate_mobile = (bool)$val;
        $this->apiParams['generate_mobile'] = (bool)$val;
    }

    public function setMultiGroup($val)
    {
        $this->multi_group = (bool)$val;
        $this->apiParams['multi_group'] = (bool)$val;
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

    public function setWeAppWebViewUrl($val)
    {
        $this->we_app_web_view_url = (bool)$val;
        $this->apiParams['we_app_web_view_url'] = (bool)$val;
    }

    public function setChannelType($val)
    {
        $this->channel_type = (int)$val;
        $this->apiParams['channel_type'] = (int)$val;
    }

    public function setPidList($val)
    {
        $this->p_id_list = @json_encode($val);
        $this->apiParams['p_id_list'] = @json_encode($val);
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}