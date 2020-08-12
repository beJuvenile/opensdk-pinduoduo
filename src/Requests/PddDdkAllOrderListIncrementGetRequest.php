<?php
/**
 * 查询所有授权的多多客订单
 *
 * @link: https://open.pinduoduo.com/application/document/api?id=pdd.ddk.all.order.list.increment.get
 * @author Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddDdkAllOrderListIncrementGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.all.order.list.increment.get';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $startUpdateTime; // 最近90天内多多进宝商品订单更新时间--查询时间开始。
                              // note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数

    private $endUpdateTime; // 查询结束时间，和开始时间相差不能超过24小时。
                            // note：此时间为时间戳，指格林威治时间 1970 年01 月 01 日 00 时 00 分 00 秒(北京时间 1970 年 01 月 01 日 08 时 00 分 00 秒)起至现在的总秒数

    private $pageSize; // 返回的每页结果订单数，默认为100，范围为10到100，建议使用40~50，可以提高成功率，减少超时数量。

    private $page; // 第几页，从1到10000，默认1，注：使用最后更新时间范围增量同步时，必须采用倒序的分页方式（从最后一页往回取）才能避免漏单问题。

    private $apiParams = [];


    public function setStartUpdateTime($val)
    {
        $this->startUpdateTime = (int)$val;
        $this->apiParams['start_update_time'] = (int)$val;
    }

    public function setEndUpdateTime($val)
    {
        $this->endUpdateTime = (int)$val;
        $this->apiParams['end_update_time'] = (int)$val;
    }

    public function setPageSize($val)
    {
        $this->pageSize = (int)$val;
        $this->apiParams['page_size'] = (int)$val;
    }

    public function setPage($val)
    {
        $this->page = (int)$val;
        $this->apiParams['page'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}