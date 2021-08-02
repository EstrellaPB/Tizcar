<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'last_name', 'phone', 'email'
    ];
    public function sales() {
        return $this->hasMany(Sale::class);
    }
}
