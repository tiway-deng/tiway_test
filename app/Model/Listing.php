<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    protected $table = "listing";

    public function listingExtra()
    {
        return $this->hasOne('App\Model\ListingExtra');
    }

    public function listingVariant()
    {
        return $this->hasMany('App\Model\ListingVariant');
    }
}
