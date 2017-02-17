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
         App\Model\User::create([
            'name' => 'admin',
            'password' => bcrypt('12345'),
            'email' => 'admin@admin.com',
        ]);
    }
}
