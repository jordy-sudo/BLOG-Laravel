<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{   
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Jordy Quila',
            'email' => 'Jordy@example.com',
            'password' => bcrypt('12345678')
        ]);

        Post::factory()->count(24)->create();
    }
}
