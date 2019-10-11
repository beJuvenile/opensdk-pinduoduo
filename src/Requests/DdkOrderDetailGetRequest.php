<?php
/**
 * 查询订单详情
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.order.detail.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkOrderDetailGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.order.detail.get';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $order_sn;  // 订单号

    private $apiParams = [];


    public function setOrderSn($val)
    {
        $this->order_sn = (string)$val;
        $this->apiParams['order_sn'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}