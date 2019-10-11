<?php
/**
 * 多多客工具生成店铺推广链接API
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.oauth.mall.url.gen
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkOauthMallUrlGenRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.oauth.mall.url.gen';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $mall_id;   // 店铺id

    private $pid;       // 推广位ID

    private $generate_weapp_webview;    // 是否生成唤起微信客户端链接，true-是，false-否，默认false

    private $generate_short_url;        // 是否生成短链接，true-是，false-否

    private $multi_group;               // true--生成多人团推广链接 false--生成单人团推广链接（默认false）
                                        // 1、单人团推广链接：用户访问单人团推广链接，可直接购买商品无需拼团。
                                        // 2、多人团推广链接：用户访问双人团推广链接开团，若用户分享给他人参团，则开团者和参团者的佣金均结算给推手

    private $custom_parameters;         // 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节

    private $generate_mall_collect_coupon;// 是否生成店铺收藏券推广链接

    private $apiParams = [];


    public function setMallId($val)
    {
        $this->mall_id = (int)$val;
        $this->apiParams['mall_id'] = (int)$val;
    }

    public function setPid($val)
    {
        $this->pid = (string)$val;
        $this->apiParams['pid'] = (string)$val;
    }

    public function setGenerateWeappWebview($val)
    {
        $this->generate_weapp_webview = (bool)$val;
        $this->apiParams['generate_weapp_webview'] = (bool)$val;
    }

    public function setGenerateShortUrl($val)
    {
        $this->generate_short_url = (bool)$val;
        $this->apiParams['generate_short_url'] = (bool)$val;
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

    public function setGenerateMallCollectCoupon($val)
    {
        $this->generate_mall_collect_coupon = (bool)$val;
        $this->apiParams['generate_mall_collect_coupon'] = (bool)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}