<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();

     /*   Menu::create([
            'name' => "Biftek",
            'price' => "950",
            'description' => "biftek, grilovano povrće ili krompir, sos po želji"
        ]);  
        Menu::create([
            'name' => "Palačinke po želji",
            'price' => "395",
            'description' => "nutella, orasi, plazma, džem, šlag.."
        ]);  

        Menu::create([
            'name' => "Pileći štapići u susamu",
            'price' => "930",
            'description' => "pohovana piletina, susam, pomfrit, tartar sos"
        ]); 

        */

        Menu::factory(5)->create();
        Order::factory(3)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
