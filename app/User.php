<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function addOrder($title, $order,$provider=Null){

        if($provider!=Null){
           $order=Order::create([
                'title' => $title,
                'order' => $order,
                'user_id'=> Auth::id(),
                'provider_id'=>$provider
            ]);

        }
        dd($order);


        Order::create([
            'title' => $title,
            'order' => $order,
            'user_id'=> Auth::id()
        ]);

    }






    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
