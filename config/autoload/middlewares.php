<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

return [
    'http' => [
        // 数组内配置您的全局中间件，顺序根据该数组的顺序
        //App\Middleware\CrossDomainMiddleware::class,
        Hyperf\Validation\Middleware\ValidationMiddleware::class,
    ],
];
