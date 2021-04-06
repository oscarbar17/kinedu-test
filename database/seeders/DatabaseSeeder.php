<?php

namespace Database\Seeders;

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
        NodesSeeder::run();

        // \App\Models\User::factory(10)->create();
        //\App\Models\Node::factory(5)->create();

        
    }
}
