<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\PinDuoDuo\Client;
use OpenSDK\PinDuoDuo\Requests\PddPopAuthTokenRefreshRequest;

class RefreshTokenTest
{

    private $appKey = '5843784df8914b8fb97972a25cf43';

    private $appSecret = 'abdd2dbfd848c0e0834e6a7ff3651a7b6';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new PddPopAuthTokenRefreshRequest();
        $req->setRefreshToken('7bece10bb889490980f1b17f707a2073dd489c1f');
        $c->setRequest($req);
        $result = $c->execute();

        var_dump($result);
    }

}

(new RefreshTokenTest())();



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