<?php

declare(strict_types=1);

namespace Chenjiacheng\HyperfTim;

use Chenjiacheng\Tim\Service\Account;
use Chenjiacheng\Tim\Service\Contact;
use Chenjiacheng\Tim\Service\Group;
use Chenjiacheng\Tim\Service\Message;
use Chenjiacheng\Tim\Service\Operate;
use Chenjiacheng\Tim\Service\Overall;
use Chenjiacheng\Tim\Service\Profile;
use Chenjiacheng\Tim\Service\Push;
use Chenjiacheng\Tim\Service\Sns;
use Chenjiacheng\Tim\Support\Config;
use GuzzleHttp\Client;
use Hyperf\Contract\ConfigInterface;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Guzzle\ClientFactory;

/**
 * @property Account $account
 * @property Contact $contact
 * @property Group $group
 * @property Message $message
 * @property Operate $operate
 * @property Overall $overall
 * @property Profile $profile
 * @property Push $push
 * @property Sns $sns
 * @property Config $config
 * @property Client $httpClient
 */
class Tim
{
    /**
     * @var \Chenjiacheng\Tim\Tim
     */
    protected \Chenjiacheng\Tim\Tim $tim;

    /**
     * @param \Hyperf\Contract\ContainerInterface $container
     *
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __construct(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class)->get('tim', []);
        $this->tim = new \Chenjiacheng\Tim\Tim($config);

        $httpClient = $container->get(ClientFactory::class)->create($config['http'] ?? []);
        $this->tim->offsetSet('httpClient', $httpClient);
    }

    public function __get(string $name)
    {
        return $this->tim->$name;
    }
}