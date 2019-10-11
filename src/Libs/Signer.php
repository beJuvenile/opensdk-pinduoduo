<?php
/**
 * 签名
 * 
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 22:13
 */
namespace OpenSDK\PinDuoDuo\Libs;

class Signer
{

    /**
     * 生成签名
     *
     * @param array $data // 数据
     * @param string $secret // 密钥
     * @return string
     */
    public static function make($data, $secret)
    {
        ksort($data);
        $stringToBeSigned = $secret;
        foreach ($data as $k => $v)
        {
            if("@" != substr($v, 0, 1))
            {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $secret;

        return strtoupper(md5($stringToBeSigned));
    }
    
}