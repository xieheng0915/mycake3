<?php
/**
 * Routes configuration
 
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/posts', function($routes){
    $routes->connect('/',
        ['controller' => 'Posts']
    );
    
    $routes->connect('/create',
        ['controller' => 'Posts', 'action' => 'create']
    );

    $routes->connect('/:id',
        ['controller' => 'Posts', 'action' => 'view'],
        ['id' => '\d+', 'pass' => ['id']]
    );

    $routes->connect('edit/:id',
        ['controller' => 'Posts', 'action' => 'edit'],
        ['id' => '\d+', 'pass' => ['id']]
    );

    $routes->connect('/edit',
        ['controller' => 'Posts', 'action' => 'hello']);
});

Router::prefix('admin', function($routes){
    $routes->connect('/',['controller' => 'Dashboard']);
    $routes->connect('/create', ['controller' => 'Posts', 'action' => 'create']);
});

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    /*  Here comment out below crsf related contents due to the csrf mismatch error when delete the postLink. */
    // $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
    //     'httpOnly' => true
    // ]));

    //$routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Posts', 'action' => 'index','home']);

    //$routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks(DashedRoute::class);
});

/**
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * Router::scope('/api', function (RouteBuilder $routes) {
 *     // No $routes->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
