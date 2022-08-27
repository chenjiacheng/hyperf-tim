<?php

declare(strict_types=1);

return [
    'sdkappid'   => env('TIM_APP_ID', '1400000000'),
    'key'        => env('TIM_KEY', 'd182df719a269501ec4795f980aa3691cae60412335058c161c3467d3cb0f565'),
    'identifier' => 'administrator',

    /**
     * 接口请求相关配置，超时时间等，更多配置项请参考：
     * https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html
     */
    'http'       => [
        'timeout' => 5.0,
    ],
];