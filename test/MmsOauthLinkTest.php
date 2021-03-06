<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2020/06/27
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\PinDuoDuo\OauthClient;
use OpenSDK\PinDuoDuo\Requests\Oauth\MmsOauthLinkRequest;

class MmsOauthLinkTest
{

    private $appKey = '5843784df8914b8fb97972a25cf43';

    private $appSecret = 'abdd2dbfd848c0e0834e6a7ff3651a7b';

    public function __invoke()
    {
        $c = new OauthClient();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new MmsOauthLinkRequest();
        $req->setResponseType('code');
        $req->setRedirectUri("https://www.baidu.com");
        $req->setState("3333");
        $req->setView("h5");
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new MmsOauthLinkTest())();



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