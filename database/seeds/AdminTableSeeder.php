<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'username'    => 'Admin',
            'email'    => 'admin@gmail.com',
            'password'   => \Hash::make('secret'),
             'phone'=>'Null',
                     'date_of_birth'=>'Null',
                    'Gender'=>'Null',
                    'verifyToken'=>'Null',
                    'Country'=>'Null',
                    'Image'=>'Null',
                    'Type'=>'Null',
        ]);
    }
}
