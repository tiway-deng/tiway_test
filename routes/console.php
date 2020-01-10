<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('tiway:test_ting', function () {
    $res = \Tiway\TingTalkRobot\Facades\DingTalkRobot::alertToDing('dd0','33');
    dd($res);

});


Artisan::command('tiway:test', function () {

    $client = new \Elastica\Client(array('log' => true));
    $options = array(
        'index' => 'ztm',
        'type' => 'log',
    );
    $log = new \Elastica\Log($client);


    $a = [
        'url'=>'https:\\url',
        'request'=>[
               'name'   => 1,
               'sex'   => 'female',
        ],
        'response'=> [
            'status'    => true,
            'msg'       => 'success'
        ]
    ];
    $log->log('ddd',$a);
//    logger('ok',$a);
    dd('ok');

});