<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Plat;
use App\Models\Order;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $users = User::factory()->count(25)->create();

        $plats = Plat::factory()->count(20)->create();

        $orders = Order::factory()
            ->count(20)
            ->create()
            ->each(function ($order) use ($plats, $users) {
                $order->plat()->attach([$plats->random()->id]);
                $order->user()->attach([$users->random()->id]);
                //    $order->user_id = $users->random()->id;
            });
    }
}
