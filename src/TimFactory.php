<?php

declare(strict_types=1);

namespace Chenjiacheng\HyperfTim;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Guzzle\ClientFactory;

class TimFactory
{
    /**
     * @var array
     */
    protected array $config;

    /**
     * @var \Hyperf\Contract\ContainerInterface
     */
    protected ContainerInterface $container;

    /**
     * @param \Hyperf\Contract\ContainerInterface $container
     *
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __construct(ContainerInterface $container)
    {
        $this->config = $container->get(ConfigInterface::class)->get('tim', []);
        $this->container = $container;

        $tim = make(Tim::class, $this->config);
        $tim->offsetSet('httpClient', $this->container->get(ClientFactory::class)->create($this->config['http'] ?? []));
    }
}