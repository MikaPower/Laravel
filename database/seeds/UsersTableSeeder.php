<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nuno Ferreira',
            'email' => 'nunoalf@hotmail.com ',
            'password' => bcrypt('tribalwars'),
        ]);
    }
}
