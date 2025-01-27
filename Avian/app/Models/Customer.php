<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'customer_id', 'customer_id');
    }

    public $timestamps = false;
}
