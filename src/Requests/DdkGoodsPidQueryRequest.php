<?php
/**
 * 查询已经生成的推广位信息
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.goods.pid.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkGoodsPidQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.goods.pid.query';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $page;      // 返回的页数

    private $page_size; // 返回的每页推广位数量

    private $pid_list;  // 推广位id列表

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

    public function setPidList($val)
    {
        $this->pid_list = @json_encode($val);
        $this->apiParams['pid_list'] = @json_encode($val);
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}