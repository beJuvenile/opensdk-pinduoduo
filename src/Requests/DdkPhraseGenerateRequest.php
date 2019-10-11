<?php
/**
 * 生成多多口令接口
 *
 * @link: https://open.pinduoduo.com/#/apidocument/port?portId=pdd.ddk.phrase.generate
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class DdkPhraseGenerateRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.phrase.generate';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $p_id;          // 推广位ID

    private $goods_id_list; // 商品ID，仅支持单个查询, json 字符串 例子：[1112]

    private $multi_group;   // 是否多人团

    private $custom_parameters; // 自定义参数

    private $zs_duo_id;     // 招商多多客ID

    private $style;         // 1-大图弹框 2-对话弹框

    private $apiParams = [];


    public function setPid($val)
    {
        $this->p_id = (string)$val;
        $this->apiParams['p_id'] = (string)$val;
    }

    public function setGoodsIdList($val)
    {
        $this->goods_id_list = @json_encode($val);
        $this->apiParams['goods_id_list'] = @json_encode($val);
    }

    public function setMultiGroup($val)
    {
        $this->multi_group = (bool)$val;
        $this->apiParams['multi_group'] = (bool)$val;
    }

    public function setCustomParameters($val)
    {
        $this->custom_parameters = (string)$val;
        $this->apiParams['custom_parameters'] = (string)$val;
    }

    public function setZsDuoId($val)
    {
        $this->zs_duo_id = (int)$val;
        $this->apiParams['zs_duo_id'] = (int)$val;
    }

    public function setStyle($val)
    {
        $this->style = (int)$val;
        $this->apiParams['style'] = (int)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}