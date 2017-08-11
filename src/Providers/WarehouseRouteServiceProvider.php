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
        $router->get('storagelite',                         'Storage24Lite\Controllers\ContentController@render_start');
        $router->get('storagelite/transfer',              'Storage24Lite\Controllers\ContentController@render_transfer');
        $router->get('storagelite/inventur',              'Storage24Lite\Controllers\ContentController@render_inventur');
        $router->get('storagelite/test',                  'Storage24Lite\Controllers\ContentController@test');
        $router->get('storagelite/incoming',                  'Storage24Lite\Controllers\ContentController@render_incoming');
    }

}

?>
