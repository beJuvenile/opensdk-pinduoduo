<?php
/**
 * 多多进宝主题商品查询
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.theme.goods.search
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkThemeGoodsSearchRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.theme.goods.search';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $theme_id;  // 主题ID

    private $apiParams = [];


    public function setThemeId($val)
    {
        $this->theme_id = (int)$val;
        $this->apiParams['theme_id'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}