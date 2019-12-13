<?php
/**
 * Created by PhpStorm.
 * User: HASEE
 * Date: 2019-04-26
 * Time: 23:08
 */

namespace App\Http\Controllers\Admin;


use App\Model\Listing;
use App\Model\ListingVariant;
use Illuminate\Support\Facades\DB;
use Tiway\Ecommerce\Facades\Ecommerce;


class Index
{

    public function index()
    {

        $export_data =  $lists = ListingVariant::query()->limit(30)->get();

        dd($export_data);
    }

    public function exportVipOrder()
    {
        set_time_limit(0);

        header ( "Content-type:application/vnd.ms-excel" );
        header ( "Content-Disposition:filename=" . iconv ( "UTF-8", "GB18030", date('Y-m-d',time()) ) . ".csv" );//导出文件名

        // 打开PHP文件句柄，php://output 表示直接输出到浏览器
        $fp = fopen('php://output', 'a');

        $column_name = "platform, title, sku, image";
        $column_name = explode(',',$column_name);
        // 将中文标题转换编码，否则乱码
        foreach ($column_name as $i => $v) {
            $column_name[$i] = iconv('utf-8', 'GB18030', $v);
        }
        // 将标题名称通过fputcsv写到文件句柄
        fputcsv($fp, $column_name);

        $total_export_count =  $lists = ListingVariant::query()->count();
        $pre_count = 1000;
        $j=0;
        for ($i=0;$i<intval($total_export_count/$pre_count)+1;$i++){
            //切割每份数据
            $export_data =  $lists = ListingVariant::query()->limit(strval($i*$pre_count).",{$pre_count}")->get();
            //整理数据
            foreach ( $export_data as &$val ) {
                $tmpRow = [];
                $tmpRow[] =++$j;
                $tmpRow[] =$val['id'];
                $tmpRow[] =$val['sku'];
                $tmpRow[] =$val->listing['platform'];
                $tmpRow[] =$val->listing['title'];

                $rows = array();
                foreach ( $tmpRow as $export_obj){
                    $rows[] = iconv('utf-8', 'GB18030', $export_obj);
                }
                fputcsv($fp, $rows);
            }

            // 将已经写到csv中的数据存储变量销毁，释放内存占用
            unset($export_data);
            ob_flush();
            flush();
        }
        exit ();

    }

    public function test()
    {

        $a = Ecommerce::test_rtn('Aex');
        dd($a);
        return view('Packagetest::packagetest',['msg'=>$a]);
    }

}