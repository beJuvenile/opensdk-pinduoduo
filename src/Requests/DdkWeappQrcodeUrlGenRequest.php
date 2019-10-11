<?php
/**
 * 多多客生成单品推广小程序二维码url
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.weapp.qrcode.url.gen
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkWeappQrcodeUrlGenRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.weapp.qrcode.url.gen';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $p_id;              // 推广位ID

    private $goods_id_list;     // 商品ID，仅支持单个查询

    private $custom_parameters; // 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。

    private $zs_duo_id;         // 招商多多客ID

    private $generate_mall_collect_coupon;  // 是否生成店铺收藏券推广链接

    private $apiParams = [];


    public function setPid($val)
    {
        $this->p_id = (string)$val;
        $this->apiParams['p_id'] = (string)$val;
    }

    public function setGoodsIdList($val)
    {
        $this->goods_id_list = @json_encode($val);
        $this->apiParams['goods_id_list'] = @json_encode($val);
    }

    public function setCustomParameters($val)
    {
        $this->custom_parameters = (string)$val;
        $this->apiParams['custom_parameters'] = (string)$val;
    }

    public function setZsDuoId($val)
    {
        $this->zs_duo_id = (int)$val;
        $this->apiParams['zs_duo_id'] = (int)$val;
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