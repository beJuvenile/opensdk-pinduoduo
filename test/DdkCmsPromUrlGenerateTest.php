<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\PinDuoDuo\Client;
use OpenSDK\PinDuoDuo\Requests\DdkCmsPromUrlGenerateRequest;

class DdkCmsPromUrlGenerateTest
{

    private $appKey = 'f0fe3f57990d462a80b762104a90d8db';

    private $appSecret = 'd0a7696736d55a62688377d02309e68d90e463d8';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new DdkCmsPromUrlGenerateRequest();
        $req->setWeAppWebViewShortUrl(true);
        $req->setWeAppWebViewUrl(true);
        $req->setPidList(['1744096_21924776']);
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new DdkCmsPromUrlGenerateTest())();



/*
$c = new Client();
$c->appKey = '5d84bcc8bf121';
$c->appSecret = 'dab025a5213aef8e94a8f2dc52d37e2a';
$req = new HotWordsRequest();
$c->setRequest($req);
$result = $c->execute();
echo 1;
var_dump($result);
*/