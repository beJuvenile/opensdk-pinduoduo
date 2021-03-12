<?php
/**
 * 在获得直播间ID的情况下，查询该直播间的详情数据
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.mall.goods.list.get
 * @author Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddDdkLiveDetailRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.live.detail';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $goods_page;          // 分页数

    private $goods_page_size;     // 每页商品数量

    private $need_goods_info = true;         // 是否返回商品信息，默认true

    private $room_id;             // 直播间id

    private $apiParams = [];



    public function setGoodsPage($val)
    {
        $this->goods_page = (int)$val;
        $this->apiParams['goods_page'] = (int)$val;
    }

    public function setRoomId($val)
    {
        $this->room_id = (int)$val;
        $this->apiParams['room_id'] = (int)$val;
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