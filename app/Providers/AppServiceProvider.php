<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use Monolog\Handler\ElasticSearchHandler;
use Monolog\Logger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $client = new \Elastica\Client();
        $options = array(
            'index' => 'ztm',
            'type' => 'log',
        );
        $handler = new ElasticSearchHandler($client, $options);
        $log = new Logger('application');
        $log->pushHandler($handler);

//        $client = new \Elastica\Client();
//        $options = array(
//            'index' => 'school',
//            'type' => 'log',
//        );
//        $handler = new ElasticSearchHandler($client, $options);
//        $log = new Logger('es');
////        $log->popHandler();
//        $log->pushHandler($handler);


        //
//        $client = new \Elastica\Client(['host'=>'192.168.0.104','port'=>9200]);
//        $options = [
//            'index' => 'school',
//            'type'  => 'log',
//        ];
//        $monolog = \Illuminate\Support\Facades\Log::getMonolog();
//        $handler = new ElasticSearchHandler($client, $options,200);
//        $monolog->popHandler(); // 把默认的文件存储去掉，否则会将日志同时存储到文件和ElasticSearch
//        $monolog->pushHandler($handler); // 添加 ElasticSearch 日志存储句柄

    }
}
