<?php

declare(strict_types=1);

namespace Chenjiacheng\HyperfTim;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                \Chenjiacheng\Tim\Tim::class => Tim::class,
            ],
            'commands'     => [
            ],
            'annotations'  => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish'      => [
                [
                    'id'          => 'config',
                    'description' => 'The config for tim.',
                    'source'      => __DIR__ . '/../publish/tim.php',
                    'destination' => BASE_PATH . '/config/autoload/tim.php',
                ],
            ],
        ];
    }
}