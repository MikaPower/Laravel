<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['quantity','description','owners_id'];





    public function parcels(){
        return $this->hasMany(Parcel::class);
    }
}
