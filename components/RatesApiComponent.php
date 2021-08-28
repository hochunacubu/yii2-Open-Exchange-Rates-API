<?php

namespace app\components;

use yii\base\Component;
use linslin\yii2\curl\Curl;
use app\dto\RatesLatestDto;

class RatesApiComponent extends Component
{
    /** @var string */
    private static $apiUrl = 'https://openexchangerates.org/api';

    /** @var string */
    private static $appId = '621a3ebf31434ed8bd80df30ef12bb70';

    /**
     * Get the latest exchange rates
     * https://oxr.readme.io/docs/latest-json
     * @param array $params
     *
     * @return RatesLatestDto
     */
    public static function getRatesLatest(array $params = []) : RatesLatestDto
    {
        $method = '/latest.json';
        $request = self::sendGetRequest($method);
        $ratesLatestDto = new RatesLatestDto($request);

        return $ratesLatestDto;
    }

    /**
     * @param string $method
     */
    private static function sendGetRequest(string $method, array $params = [])
    {
        $appId = self::$appId;
        $apiUrl = self::$apiUrl . $method;
        $params['app_id'] = $appId;
        $curl = new Curl();
        $curl->setOption(CURLOPT_RETURNTRANSFER, 1);
        $curl->setGetParams($params);
        $request = $curl->get($apiUrl);

        return json_decode($request, true);
    }
}