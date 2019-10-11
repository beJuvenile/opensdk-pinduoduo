<?php
/**
 * 查询优惠券信息
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.coupon.info.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkCouponInfoQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.coupon.info.query';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $coupon_ids;    // 优惠券id

    private $apiParams = [];

    public function setCouponIds($val)
    {
        $this->coupon_ids = (string)$val;
        $this->apiParams['coupon_ids'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}