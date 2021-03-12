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

    private $custom_parameters; // 自定义参数

    private $goods_sign; // 商品goodsSign，支持通过goodsSign查询商品。goodsSign是加密后的goodsId, goodsId已下线，请使用goodsSign来替代。
                        // 使用说明：https://jinbao.pinduoduo.com/qa-system?questionId=252

    private $pid;           // 推广位id

    private $search_id; // 搜索id，建议填写，提高收益。来自pdd.ddk.goods.recommend.get、pdd.ddk.goods.search、pdd.ddk.top.goods.list.query等接口

    private $zs_duo_id;     // 招商多多客ID

    private $apiParams = [];


    public function setCustomParameters($val)
    {
        $this->custom_parameters = (string)$val;
        $this->apiParams['custom_parameters'] = (string)$val;
    }

    public function setGoodsSign(string $val)
    {
        $this->goods_sign = $val;
        $this->apiParams['goods_sign'] = $val;
    }

    public function setPid($val)
    {
        $this->pid = (string)$val;
        $this->apiParams['pid'] = (string)$val;
    }

    public function setSearchId(string $val)
    {
        $this->search_id = $val;
        $this->apiParams['search_id'] = $val;
    }

    public function setZsDuoId($val)
    {
        $this->zs_duo_id = (int)$val;
        $this->apiParams['zs_duo_id'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}