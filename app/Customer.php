<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'last_name', 'address', 'phone', 'email'
    ];
    public function sales() {
        return $this->hasMany(Sale::class);
    }
}
