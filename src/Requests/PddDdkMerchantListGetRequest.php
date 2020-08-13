<?php
/**
 * 多多客查店铺列表接口
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.merchant.list.get
 * @author Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddDdkMerchantListGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.merchant.list.get';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $cat_id;    // 商品类目ID，使用pdd.goods.cats.get接口获取

    private $has_clt_cpn;   // 是否有店铺收藏券 （0 所有；1 必须有券）

    private $has_coupon;    // 是否有优惠券 （0 所有；1 必须有券。）

    private $mall_id_list;  // 店铺id

    private $merchant_type_list;    // 店铺类型

    private $page_number;   // 每页数量

    private $page_size;     // 分页数

    private $query_range_str;   // 查询范围0----商品拼团价格区间；1----商品券后价价格区间；2----佣金比例区间；
                                // 3----优惠券金额区间；4----加入多多进宝时间区间；5----销量区间；6----佣金金额区间

    private $range_vo_list; // 筛选范围

    private $pid; // 推广位id

    private $custom_parameters; // 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；
                                // 格式为： {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填；
                                // sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key

    private $apiParams = [];


    public function setCatId($val)
    {
        $this->cat_id = (int)$val;
        $this->apiParams['cat_id'] = (int)$val;
    }

    public function setHasCltCpn($val)
    {
        $this->has_clt_cpn = (int)$val;
        $this->apiParams['has_clt_cpn'] = (int)$val;
    }

    public function setHasCoupon($val)
    {
        $this->has_coupon = (int)$val;
        $this->apiParams['has_coupon'] = (int)$val;
    }

    public function setMallIdList(string $val)
    {
        $this->mall_id_list = $val;
        $this->apiParams['mall_id_list'] = $val;
    }

    public function setMerchantTypeList($val)
    {
        $this->merchant_type_list = $val;
        $this->apiParams['merchant_type_list'] = $val;
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

    public function setQueryRangeStr($val)
    {
        $this->query_range_str = (int)$val;
        $this->apiParams['query_range_str'] = (int)$val;
    }

    public function setRangeVoList($val)
    {
        $this->range_vo_list = (string)$val;
        $this->apiParams['range_vo_list'] = (string)$val;
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