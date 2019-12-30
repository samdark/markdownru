<?php

use App\Factory\LoggerFactory;
use Psr\Log\LoggerInterface;
use Yiisoft\Cache\ArrayCache;
use Yiisoft\Cache\Cache;
use Yiisoft\Cache\CacheInterface;
use Yiisoft\Log\Target\File\FileRotator;
use Yiisoft\Log\Target\File\FileRotatorInterface;

/**
 * @var array $params
 */

return [
    CacheInterface::class => [
        '__class' => Cache::class,
        'handler' => [
            '__class' => ArrayCache::class,
        ],
    ],
    LoggerInterface::class => new LoggerFactory(),
    FileRotatorInterface::class => [
        '__class' => FileRotator::class,
        '__construct()' => [
            10
        ]
    ],
];
