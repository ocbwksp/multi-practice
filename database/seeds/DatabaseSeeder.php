<?php

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
       
        Schema::disableForeignKeyConstraints();

        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
