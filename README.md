# opensdk-pinduoduo

#### 介绍
本类库是对拼多多开放平台API的封装  
接口文档请参见 [拼多多开放平台](https://open.pinduoduo.com/#/apidocument)

#### 使用示例
~~~php
require 'vendor/autoload.php';

use OpenSDK\PinDuoDuo\Client;
use OpenSDK\PinDuoDuo\Requests\PddDdkCmsPromUrlGenerateRequest;

$c = new Client();
$c->appKey = 'You are appKey';
$c->appSecret = 'You are appSecret';
$req = new PddDdkCmsPromUrlGenerateRequest();
$req->setWeAppWebViewShortUrl(true);
$req->setWeAppWebViewUrl(true);
$req->setPidList(['xxxx_xxxxx']);
$c->setRequest($req);
$result = $c->execute();

var_dump($result);
~~~