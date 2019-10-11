<?php
/**
 * 多多进宝主题列表查询
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.theme.list.get
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkThemeListGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.theme.list.get';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $page_size; // 返回的一页数据数量

    private $page;      // 返回的页码

    private $apiParams = [];


    public function setPageSize($val)
    {
        $this->page_size = (int)$val;
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