<?php
/**
 * 多多进宝推广链接生成
 *
 * @link https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.goods.promotion.url.generate
 * @author Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddDdkGoodsPromotionUrlGenerateRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.goods.promotion.url.generate';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $p_id; // 推广位ID

    private $goods_id_list; // 商品ID，仅支持单个查询

    private $generate_short_url; // 是否生成短链接，true-是，false-否

    private $multi_group; // true--生成多人团推广链接 false--生成单人团推广链接（默认false）
                          // 1、单人团推广链接：用户访问单人团推广链接，可直接购买商品无需拼团。
                          // 2、多人团推广链接：用户访问双人团推广链接开团，若用户分享给他人参团，则开团者和参团者的佣金均结算给推手

    private $custom_parameters; // 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节

    private $generate_weapp_webview; // 是否生成唤起微信客户端链接，true-是，false-否，默认false

    private $zs_duo_id; // 招商多多客ID

    private $generate_we_app; // 是否生成小程序推广

    private $generate_weiboapp_webview; // 是否生成微博推广链接

    private $generate_mall_collect_coupon;  // 是否生成店铺收藏券推广链接

    private $generate_qq_app; // 是否生成qq小程序

    private $generate_schema_url; // 是否返回 schema URL

    private $search_id; // 搜索id，建议填写，提高收益。来自pdd.ddk.goods.recommend.get、pdd.ddk.goods.search、pdd.ddk.top.goods.list.query等接口

    private $room_id_list; // 直播间id列表，如果生成直播间推广链接该参数必填，goods_id_list填[1]

    private $target_id_list; // 直播预约id列表，如果生成直播间预约推广链接该参数必填，goods_id_list填[1]，room_id_list不填

    private $generate_authority_url; // 是否生成带授权的单品链接。如果未授权，则会走授权流程

    private $apiParams = [];



    public function setPid($val)
    {
        $this->p_id = (string)$val;
        $this->apiParams['p_id'] = (string)$val;
    }

    public function setGoodsIdList(string $val)
    {
        $this->goods_id_list = $val;
        $this->apiParams['goods_id_list'] = $val;
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

    public function setGenerateWeappWebview($val)
    {
        $this->generate_weapp_webview = (bool)$val;
        $this->apiParams['generate_weapp_webview'] = (bool)$val;
    }

    public function setZsDuoId($val)
    {
        $this->zs_duo_id = (int)$val;
        $this->apiParams['zs_duo_id'] = (int)$val;
    }

    public function setGenerateWeApp($val)
    {
        $this->generate_we_app = (bool)$val;
        $this->apiParams['generate_we_app'] = (bool)$val;
    }

    public function setGenerateWeiboappWebview($val)
    {
        $this->generate_weiboapp_webview = (bool)$val;
        $this->apiParams['generate_weiboapp_webview'] = (bool)$val;
    }

    public function setGenerateMallCollectCoupon($val)
    {
        $this->generate_mall_collect_coupon = (bool)$val;
        $this->apiParams['generate_mall_collect_coupon'] = (bool)$val;
    }

    public function setGenerateQqApp(bool $val)
    {
        $this->generate_qq_app = $val;
        $this->apiParams['generate_qq_app'] = $val;
    }

    public function setGenerateSchemaUrl(bool $val)
    {
        $this->generate_schema_url = $val;
        $this->apiParams['generate_schema_url'] = $val;
    }

    public function setSearchId(string $val)
    {
        $this->search_id = $val;
        $this->apiParams['search_id'] = $val;
    }

    public function setRoomIdList(string $val)
    {
        $this->room_id_list = $val;
        $this->apiParams['room_id_list'] = $val;
    }

    public function setTargetIdList(string $val)
    {
        $this->target_id_list = $val;
        $this->apiParams['target_id_list'] = $val;
    }

    public function setGenerateAuthorityUrl(bool $val)
    {
        $this->generate_authority_url = $val;
        $this->apiParams['generate_authority_url'] = $val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}