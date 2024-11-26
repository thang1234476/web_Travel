<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->phone = '0918517064';
        $user->is_admin = true;
        $user->password = bcrypt('123456');
        $user->adress ='Thừa Thiên huế';
        $user->gender = 'nu';
        $user->save();

        $user = new User;
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->phone = '0918517064';
        $user->is_admin = false;
        $user->password = bcrypt('123456');
        $user->adress ='Thừa Thiên huế';
        $user->gender = 'nam';
        $user->save();
    }
}
