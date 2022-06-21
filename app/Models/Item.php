<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

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
        'event_id',
        'group_id',
        'customer_id',
    ];

    public function group()
    {
        return $this->belongsTo(App\Models\Group::class);
    }

    public function event()
    {
        return $this->belongsTo(App\Models\Event::class);
        return $this->belongsTo(App\Models\Group::class);
    }

    public function claim()
    {
        return $this->belongsTo(App\Models\Customer::class);
    }
}
