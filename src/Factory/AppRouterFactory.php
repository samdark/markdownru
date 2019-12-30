<?php
namespace App\Factory;

use Psr\Container\ContainerInterface;
use Yiisoft\Router\FastRoute\FastRouteFactory;
use Yiisoft\Router\Route;
use Yiisoft\Router\RouterFactory;
use Yiisoft\Yii\Web\Middleware\ActionCaller;
use App\Controller\MarkdownController;

class AppRouterFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $routes = [
            Route::get('/[{name:[\w\.]+}]')
                ->defaults(['name' => 'index.md'])
                ->to(new ActionCaller(MarkdownController::class, 'content', $container))
                ->name('site/content')
            ,
        ];

        return (new RouterFactory(new FastRouteFactory(), $routes))($container);
    }
}
