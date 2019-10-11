<?php
/**
 * 多多进宝主题推广链接生成
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.oauth.theme.prom.url.generate
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkOauthThemePromUrlGenerateRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.oauth.theme.prom.url.generate';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $pid;           // 推广位ID

    private $theme_id_list; // 主题ID列表,例如[1,235]

    private $generate_short_url;// 是否生成短链接,true-是,false-否

    private $generate_mobile;// 是否生成手机跳转链接。true-是,false-否,默认false

    private $custom_parameters; // 自定义参数,为链接打上自定义标签。自定义参数最长限制64个字节。

    private $generate_weapp_webview;// 是否唤起微信客户端， 默认false 否，true 是

    private $we_app_web_view_short_url; // 唤起微信app推广短链接

    private $we_app_web_wiew_url;   // 唤起微信app推广链接

    private $apiParams = [];


    public function setPid($val)
    {
        $this->pid = (string)$val;
        $this->apiParams['pid'] = (string)$val;
    }

    public function setThemeIdList($val)
    {
        $this->theme_id_list = @json_encode($val);
        $this->apiParams['theme_id_list'] = @json_encode($val);
    }

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

    public function setCustomParameters($val)
    {
        $this->custom_parameters = (string)$val;
        $this->apiParams['custom_parameters'] = (string)$val;
    }

    public function generateWeappWebview($val)
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

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}