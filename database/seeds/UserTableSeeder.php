<?php

use App\Models\User;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Mahmut',
            'surname' => 'Akyol',
            'is_admin' => '1',
            'user_university' => 'Sakarya University',
            'user_country' => 'Turkey',
            'email' => 'mahmut.akyol@outlook.com.tr',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'User',
            'surname' => 'Akyol',
            'is_admin' => '1',
            'user_university' => 'Sakarya University',
            'user_country' => 'Turkey',
            'email' => 'user@outlook.com.tr',
            'password' => bcrypt('123456')
        ]);
    }
}
