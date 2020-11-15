<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
        DB::table('users')->insert([
        'name'=>'Admin1',
        'email'=>'Admin1@ehb.be',
        'password'=> Hash::make('Password'),
        'is_admin'=>'admin'
        ]);

    }
}
