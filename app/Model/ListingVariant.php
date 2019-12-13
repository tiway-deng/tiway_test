<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ListingVariant extends Model
{
    protected $table = "listing_variant";

    public function listing()
    {
        return $this->belongsTo('App\Model\Listing');
    }
}
