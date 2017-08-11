<?php

namespace Storage24Lite\Providers;

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
        $router->get('storage',                         'Storage24Lite\Controllers\ContentController@render_start');
        $router->get('storage/transfer',              'Storage24Lite\Controllers\ContentController@render_transfer');
        $router->get('storage/inventur',              'Storage24Lite\Controllers\ContentController@render_inventur');
        $router->get('storage/test',                  'Storage24Lite\Controllers\ContentController@test');
        $router->get('storage/incoming',                  'Storage24Lite\Controllers\ContentController@render_incoming');
    }

}

?>
