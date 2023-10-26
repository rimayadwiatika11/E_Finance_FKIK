<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=[
            [
                'username'      =>  'admin',
                'email'     =>  'admin@gmail.com',
                'password'  =>  '123456'
            ],
            [
                'username'      =>  'user',
                'email'     =>  'user@gmail.com',
                'password'  =>  bcrypt('123456')
            ],
            ];

            foreach($user as $key => $val){
                User::updateOrCreate($val );
            }
    }
}
