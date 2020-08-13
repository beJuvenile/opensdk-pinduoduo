<?php
/**
 * 多多进宝商品详情查询
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.goods.detail
 * @author Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddDdkGoodsDetailRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.goods.detail';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $goods_id_list; // 商品ID，仅支持单个查询。例如：[123456]

    private $pid;           // 推广位id

    private $custom_parameters; // 自定义参数

    private $zs_duo_id;     // 招商多多客ID

    private $plan_type;     // 佣金优惠券对应推广类型，3：专属 4：招商

    private $search_id; // 搜索id，建议填写，提高收益。来自pdd.ddk.goods.recommend.get、pdd.ddk.goods.search、pdd.ddk.top.goods.list.query等接口

    private $apiParams = [];


    public function seGoodsIdList(array $val)
    {
        $this->goods_id_list = $val;
        $this->apiParams['goods_id_list'] = $val;
    }

    public function setPid($val)
    {
        $this->pid = (string)$val;
        $this->apiParams['pid'] = (string)$val;
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

    public function setPlanType($val)
    {
        $this->plan_type = (int)$val;
        $this->apiParams['plan_type'] = (int)$val;
    }

    public function setSearchId(string $val)
    {
        $this->search_id = $val;
        $this->apiParams['search_id'] = $val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}