<?php
/**
 * 查询账号下绑定的直播间信息
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.mall.goods.list.get
 * @author Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddDdkLiveListRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.live.list';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $goods_page_size;          // 商品数量，默认3，最多5个

    private $need_goods_info = false; // 是否返回商品信息，默认false

    private $page;         // 分页数

    private $page_size;    // 每页数量

    private $apiParams = [];



    public function setPage($val)
    {
        $this->page = (int)$val;
        $this->apiParams['page'] = (int)$val;
    }

    public function setPageSize($val)
    {
        $this->page_size = (int)$val;
        $this->apiParams['page_size'] = (int)$val;
    }

    public function setNeedGoodsInfo(string $val)
    {
        $this->need_goods_info = $val;
        $this->apiParams['need_goods_info'] = $val;
    }

    public function setGoodsPageSize(string $val)
    {
        $this->goods_page_size = $val;
        $this->apiParams['goods_page_size'] = $val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}