<?php
/**
 * 用时间段查询推广订单接口
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.order.list.range.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkOrderListRangeGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.order.list.range.get';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $start_time;    // 支付起始时间，如：2019-05-05 00:00:00

    private $last_order_id; // 上一次的迭代器id(第一次不填)

    private $page_size;     // 返回的每页结果订单数，默认为100，范围为10到100，建议使用40~50，可以提高成功率，减少超时数量。

    private $end_time;      // 支付结束时间，如：2019-05-05 00:00:00

    private $apiParams = [];


    public function setStartTime($val)
    {
        $this->start_time = (string)$val;
        $this->apiParams['start_time'] = (string)$val;
    }

    public function setLastOrderId($val)
    {
        $this->last_order_id = (string)$val;
        $this->apiParams['last_order_id'] = (string)$val;
    }

    public function setPageSize($val)
    {
        $this->page_size = (int)$val;
        $this->apiParams['page_size'] = (int)$val;
    }

    public function setEndTime($val)
    {
        $this->end_time = (string)$val;
        $this->apiParams['end_time'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}