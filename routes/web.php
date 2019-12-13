<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


//        $a = \Tiway\Packagetest\Facades\Packagetest::test_rtn('tiway');
//        dd($a);
//    $a = \Aex\Packagetest\Facades\Packagetest::test_rtn('Aex');
//    dd($a);
//    return view('Packagetest::packagetest',['msg'=>$a]);

//    $a= [1,2,3,4];

    phpinfo();
//    return view('welcome');
});


Route::get('admin/index','Admin\Index@index');
Route::get('admin/test','Admin\Index@test');
Route::get('admin/exportVipOrder','Admin\Index@exportVipOrder');
