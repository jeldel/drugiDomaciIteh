<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class MenuOrderController extends Controller
{
    public function index($menu_id)
    {
        $orders = Order::get()->where('menu_id', $menu_id);

        if(is_null($orders)){
            return response()->json('Nema dostupnih podataka', 404);
        }
        
        return response()->json($orders);
    }
}