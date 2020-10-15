<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Schema::disableForeignKeyConstraints();
        // use the above line to avoide error
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name','user')->first();
    
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('1234itemS')
        ]);

        $author = User::create([
            'name' => 'Author',
            'email' => 'author@test.com',
            'password' => Hash::make('11111111')
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('11111111')
        ]);

        $admin ->roles()->attach($adminRole);
        $author ->roles()->attach($authorRole);
        $user ->roles()->attach($userRole);

    }
}
