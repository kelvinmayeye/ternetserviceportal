<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DepartmentSeeder;

class DatabaseSeeder extends Seeder {
    /**
    * Seed the application's database.
    *
    * @return void
    */

    public function run() {
        $this->call( DepartmentSeeder::class );
        \App\Models\User::factory( 3 )->create();
        \App\Models\Status::factory( 1 )->create();
        \App\Models\Service::factory( 1 )->create();
        $this->call( RoleSeeder::class );
        $this->call( AdminSeeder::class );
    }
}
