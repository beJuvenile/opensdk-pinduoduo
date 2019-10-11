<?php
/**
 * 查询CPA数据
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.oauth.finance.cpa.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkOauthFinanceCpaQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.oauth.finance.cpa.query';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $date_start;    // 开始时间

    private $date_end;      // 结束时间

    private $source_type;   // 场景值(全部-不传值 单品-0 红包-1 转盘免单-55 转盘优惠券-56 新人红包-72)

    private $apiParams = [];


    public function setDateStart($val)
    {
        $this->date_start = (string)$val;
        $this->apiParams['date_start'] = (string)$val;
    }

    public function setDateEnd($val)
    {
        $this->date_end = (string)$val;
        $this->apiParams['date_end'] = (string)$val;
    }

    public function setSourceType($val)
    {
        $this->source_type = (int)$val;
        $this->apiParams['source_type'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}