<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobile extends Model
{
    protected $fillable = [
        'serial_number', 'year', 'model', 'brand', 'price'
    ];
    public function sale() {
        return $this->hasOne(Sale::class);
    }
}
