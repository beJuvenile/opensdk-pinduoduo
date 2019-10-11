<?php
/**
 * 查询商品的推广计划
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.goods.unit.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkGoodsUnitQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.goods.unit.query';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $goods_id;  // 商品id

    private $zs_duo_id; // 招商duoId

    private $apiParams = [];


    public function setGoodsId($val)
    {
        $this->goods_id = (int)$val;
        $this->apiParams['goods_id'] = (int)$val;
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