<?php

namespace Database\Seeders;

use App\Models\Amis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Posts;
use App\Models\Interets;
use App\Models\Likes;
use App\Models\Comments;
use App\Models\UsersAmis;
use App\Models\UsersInterets;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        Posts::factory(20)->create();
        Interets::factory(10)->create();
        Amis::factory(10)->create();
        Likes::factory(20)->create();
        Comments::factory(10)->create();
        UsersInterets::factory(10)->create();
        $this->call([
            AdminUserSeeder::class,
        ]);
    }
}
