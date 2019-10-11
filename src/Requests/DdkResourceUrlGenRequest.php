<?php
/**
 * 生成多多进宝频道推广
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.resource.url.gen
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkResourceUrlGenRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.resource.url.gen';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $pid;           // 推广位ID

    private $generate_we_app; // 是否生成小程序

    private $resource_type;   // 频道来源：4-限时秒杀,39997-充值中心, 39998-转链type，39999-电器城，39996-百亿补贴

    private $custom_parameters; // 自定义参数

    private $url;           // 招商多多客ID

    private $apiParams = [];


    public function setPid($val)
    {
        $this->pid = (string)$val;
        $this->apiParams['pid'] = (string)$val;
    }

    public function setGenerateWeApp($val)
    {
        $this->generate_we_app = (bool)$val;
        $this->apiParams['generate_we_app'] = (bool)$val;
    }

    public function setResourceType($val)
    {
        $this->resource_type = (int)$val;
        $this->apiParams['resource_type'] = (int)$val;
    }

    public function setCustomParameters($val)
    {
        $this->custom_parameters = (string)$val;
        $this->apiParams['custom_parameters'] = (string)$val;
    }

    public function setUrl($val)
    {
        $this->url = (string)$val;
        $this->apiParams['url'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}