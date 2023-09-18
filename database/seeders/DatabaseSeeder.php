<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use app\Models\User;
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

        // WithoutModelEvents::disable();

        $this->call([
          CurrenciesTableSeeder::class,
          UserTableSeeder::class,
          WalletsTableSeeder::class,
        ]);

        // WithoutModelEvents::enable();
    }
}
