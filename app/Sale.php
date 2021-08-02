<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'total', 'extra'
    ];
    public function customer() {
        return $this->belongsTo(Customer::class);
    }
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
    public function automobile() {
        return $this->belongsTo(Automobile::class);
    }
}
