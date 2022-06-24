<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(['role'=>'admin','name'=> 'Murcia Mickael', 'pseudo'=>'Xbmod','photo' => '/storage/img/425474_10150998309279485_1009935999_n.jpg', 'banniere' => '/storage/img/a1dcpig9OdUu7OUm1tS5iVnTVHbypj8zH8pm5csT.png', 'email'=>'xmicky@hotmail.fr', 'email_verified_at'=> now(),    'password'=> bcrypt('123456')]);
        User::create(['role'=>'admin','name'=> 'Flo Tlm', 'pseudo'=>'Shinra','photo' => '/storage/img/0e45vMuZQ7wjMtWBOtI0cwFlHprqDodHFhXY8Q2U.png', 'banniere' => '/storage/img/z8GwfKPthtDOohqx7mHt7IfOmo1iaUWMX15OtMpF.jpg', 'email'=>'floflo@gmail.com', 'email_verified_at'=> now(),    'password'=> bcrypt('azerty')]);
      
    }
}
