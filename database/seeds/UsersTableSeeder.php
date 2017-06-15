<?php

use App\Models\User;
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
        factory(User::class)->create([
            'username' => 'jandro935',
            'email' => 'alejandro.seisdedos@gft.com',
            'password' => bcrypt('admin'),
            'user_avatar' => 'http://lorempixel.com/100/100/',
            'facebook_id' => null
        ]);
    }
}
