<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function index($user_id)
    {
        $orders = Order::get()->where('user_id', $user_id);

        if(is_null($orders)){
            return response()->json('Nema dostupnih podataka', 404);
        }
        
        return response()->json($orders);
    }
}
