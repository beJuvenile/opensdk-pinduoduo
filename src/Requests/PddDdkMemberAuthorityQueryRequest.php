<?php
/**
 * 获取Access Token
 *
 * @link https://open.pinduoduo.com/application/document/api?id=pdd.ddk.member.authority.query
 * @author Ken.Zhang <kenphp@yeah.net>
 * Date: 2020/08/12
 * Time: 21:01
 */
namespace OpenSDK\PinDuoDuo\Requests;

use OpenSDK\PinDuoDuo\Interfaces\Request;

class PddDdkMemberAuthorityQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'pdd.ddk.member.authority.query';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $pid; // 推广位id

    private $custom_parameters; // 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；
                                // 格式为： {"uid":"11111","sid":"22222"} ，其中 uid 用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填；
                                // sid 上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key

    private $apiParams = [];


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