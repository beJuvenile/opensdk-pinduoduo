<?php
/**
 * 查询店铺商品
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.mall.goods.list.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkMallGoodsListGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.mall.goods.list.get';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $mall_id;       // 店铺id

    private $page_number;   // 分页数

    private $page_size;     // 每页商品数量

    private $apiParams = [];



    public function setMallId($val)
    {
        $this->mall_id = (int)$val;
        $this->apiParams['mall_id'] = (int)$val;
    }

    public function setPageNumber($val)
    {
        $this->page_number = (int)$val;
        $this->apiParams['page_number'] = (int)$val;
    }

    public function setPageSize($val)
    {
        $this->page_size = (int)$val;
        $this->apiParams['page_size'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}