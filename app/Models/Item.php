<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model{
    protected $table = 'items';

    protected $fillable = [
        'item_identifier',
        'item_name',
        'item_color',
        'item_size',
        'returned',
        'item_price',
        'for_sale',
        'sold',
        'fk_events',
        'fk_groups',
        'fk_customers',
    ];

    public function group(){
        return $this->hasOne('App\Models\Group');
    }

    public function event(){
        return $this->hasOne('App\Models\Event');
    }
}
