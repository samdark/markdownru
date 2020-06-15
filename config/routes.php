<?php

declare(strict_types=1);

use App\Controller\MarkdownController;
use Yiisoft\Router\Route;

return [
    Route::get('/[{name:[\w\.]+}]', [MarkdownController::class, 'content'])
        ->defaults(['name' => 'index.md'])
        ->name('site/content'),
];
