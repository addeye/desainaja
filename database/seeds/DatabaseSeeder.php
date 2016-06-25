<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_level')->insert([
            'nama_level' => 'Admin'
        ]);
        DB::table('m_level')->insert([
            'nama_level' => 'Customer'
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'id_level' => 1,
            'password' => bcrypt('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'id_level' => 2,
            'password' => bcrypt('1234'),
        ]);
        // $this->call(UsersTableSeeder::class);

    }
}
