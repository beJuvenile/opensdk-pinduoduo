<?php
/**
 * 网络请求
 * 
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 22:24
 */
namespace OpenSDK\PinDuoDuo\Libs;

class Http
{

    /**
     * Post 请求
     *
     * @param string $url // 请求地址
     * @param array $data // 数据
     * @param array $headers // 请求头
     * @param string $dataType // 数据格式
     * @return mixed
     */
    public static function post($url, $data, $headers=[], $dataType='')
    {
        try{
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FAILONERROR, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            if ($headers) {
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            }

            // 数据格式
            if ($dataType=='json') {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            } else {
                if (is_array($data) && 0 < count($data)) {
                    $postBodyString = '';
                    foreach ($data as $k => $v) {
                        $postBodyString .= $k.'=' . urlencode($v) . '&';
                    }
                    unset($k, $v);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
                }
            }

            $resp = curl_exec($ch);

            if (curl_errno($ch))
                throw new \Exception(curl_error($ch),0);

            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode)
                throw new \Exception($resp, $httpStatusCode);
            curl_close($ch);

            return $resp;
        }catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    /**
     * Get请求
     *
     * @param string $url // 请求地址
     * @param array $query // 参数
     * @return mixed
     */
    public static function get($url, $query)
    {
        try{
            if ($query)
                $url = $url . '?' . http_build_query($query);

            $ch = curl_init();
            //设置选项，包括URL
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//绕过ssl验证
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            //执行并获取HTML文档内容
            $resp = curl_exec($ch);

            if (curl_errno($ch))
                throw new \Exception(curl_error($ch),0);

            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode)
                throw new \Exception($resp, $httpStatusCode);

            //释放curl句柄
            curl_close($ch);

            return $resp;
        }catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }
    
}