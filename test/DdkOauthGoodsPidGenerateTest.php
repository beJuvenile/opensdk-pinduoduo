<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\PinDuoDuo\Client;
use OpenSDK\PinDuoDuo\Requests\DdkOauthGoodsPidGenerateRequest;

class DdkOauthGoodsPidGenerateTest
{

    private $appKey = '5843784df8914b8fb97972a25cf4306';

    private $appSecret = 'abdd2dbfd848c0e0834e6a7ff3651a7b6315014';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new DdkOauthGoodsPidGenerateRequest();
        $req->setNumber(1);
        $req->setPidNameList(['张小壮']);
        $c->setRequest($req, '7a54347f5e084727b29be78f664ccce3c5b4642');
        $result = $c->execute();

        var_dump($result);
    }

}

(new DdkOauthGoodsPidGenerateTest())();
