<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['order','title','user_id'];


    public function parcels(){
        return $this->hasMany(Parcel::class);
    }

    public function addParcel($quantity,$description){
        $this->parcels()->create(compact('quantity','description'));
    }
}
