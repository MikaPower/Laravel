<?php

namespace App\Policies;

use App\User;
use App\Order;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class OrderPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can update the order.
     *
     * @param  \App\User $user
     * @param  \App\Order $order
     * @return mixed
     */
    public function update(User $user, Order $order)
    {
        return $order->user_id == $user->id;
    }
    public function view(User $user, Order $order)
    {

        if(Auth()->user()->hasRole('provider')){
            return $order->provider_id == $user->id;

        }

        return $order->user_id == $user->id;
    }

}
