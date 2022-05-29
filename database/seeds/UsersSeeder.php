<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'username' => 'admin',
          'password' => bcrypt('passw0rd'),
          'email' => 'adminroot@mail.co.id',
          'name' => 'System Administrator',
          'transaction_point' => 0,
          'remember_token' => Str::random(10),
          'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
