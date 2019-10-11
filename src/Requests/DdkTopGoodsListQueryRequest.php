<?php
/**
 * 多多客获取爆款排行商品接口
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.top.goods.list.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkTopGoodsListQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.top.goods.list.query';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $p_id;      // 推广位ID

    private $offset;    // 从多少位置开始请求；默认值 ： 0

    private $sort_type; // 1-实时热销榜；2-实时收益榜

    private $limit;     // 请求数量；默认值 ： 400

    private $apiParams = [];


    public function setPid($val)
    {
        $this->p_id = (string)$val;
        $this->apiParams['p_id'] = (string)$val;
    }

    public function setOffset($val)
    {
        $this->offset = (int)$val;
        $this->apiParams['offset'] = (int)$val;
    }

    public function setSortType($val)
    {
        $this->sort_type = (int)$val;
        $this->apiParams['sort_type'] = (int)$val;
    }

    public function setLimit($val)
    {
        $this->limit = (int)$val;
        $this->apiParams['limit'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}