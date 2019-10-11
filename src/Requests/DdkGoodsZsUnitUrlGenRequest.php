<?php
/**
 * 多多进宝转链接口
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.goods.zs.unit.url.gen
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkGoodsZsUnitUrlGenRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.goods.zs.unit.url.gen';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $source_url;    // 需转链的链接

    private $pid;           // 渠道id

    private $apiParams = [];


    public function setSourceUrl($val)
    {
        $this->source_url = (string)$val;
        $this->apiParams['source_url'] = (string)$val;
    }

    public function setPid($val)
    {
        $this->pid = (string)$val;
        $this->apiParams['pid'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}