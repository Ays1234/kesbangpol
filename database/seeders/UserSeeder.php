<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();
        $user->username = 'User1234';
        $user->nama = 'User123';
        $user->alamat = 'User123';
        $user->kodehp = 'id';
        $user->nohp = '0896';
        $user->email = 'user@mail.com';
        $user->password = bcrypt('12345678');
        $user->save();
    }
}
