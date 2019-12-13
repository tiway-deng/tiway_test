<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Good extends Model
{
    use Searchable;
    protected $table = "goods";

    public function searchableAs()
    {
        return "goods";
    }

//    //定义有哪些字段需要搜索
//    public function toSearchableArray()
//    {
//        return [
//            'title'=>$this->title,
//            'author'=>$this->author,
//            'img_path'=>$this->img_path,
//            'school_name'=>$this->school->name,
//        ];
//    }
//    //
}
