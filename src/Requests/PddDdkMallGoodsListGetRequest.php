<?php
/**
 * 查询店铺商品
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.mall.goods.list.get
 * @author Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddDdkMallGoodsListGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.mall.goods.list.get';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $mall_id;       // 店铺id

    private $page_number;   // 分页数

    private $page_size;     // 每页商品数量

    private $pid; // 推广位id

    private $custom_parameters; // 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；
                                // 格式为： {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填；
                                // sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key

    private $apiParams = [];



    public function setMallId($val)
    {
        $this->mall_id = (int)$val;
        $this->apiParams['mall_id'] = (int)$val;
    }

    public function setPageNumber($val)
    {
        $this->page_number = (int)$val;
        $this->apiParams['page_number'] = (int)$val;
    }

    public function setPageSize($val)
    {
        $this->page_size = (int)$val;
        $this->apiParams['page_size'] = (int)$val;
    }

    public function setPid(string $val)
    {
        $this->pid = $val;
        $this->apiParams['pid'] = $val;
    }

    public function setCustomParameters(string $val)
    {
        $this->custom_parameters = $val;
        $this->apiParams['custom_parameters'] = $val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}