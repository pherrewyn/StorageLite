<?php

namespace Storage24\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class WarehouseRouteServiceProvider extends RouteServiceProvider{
    /**
     * @param Router $router
     */
    public function map(Router $router){
        /**
        * GET Routing Templates
        */
        $router->get('storage',                         'WH\Controllers\ContentController@render_start');
        $router->get('storage/transfer',              'WH\Controllers\ContentController@render_transfer');
        $router->get('storage/inventur',              'WH\Controllers\ContentController@render_inventur');
        $router->get('storage/test',                  'WH\Controllers\ContentController@test');
        $router->get('storage/incoming',                  'WH\Controllers\ContentController@render_incoming');
    }

}

?>
