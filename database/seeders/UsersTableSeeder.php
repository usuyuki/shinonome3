<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name'           => 'TEST' . $i,
                'profile_photo_path'  => 'https://placehold.jp/50x50.png',
                'remember_token' => Str::random(100),
                'created_at'     => now(),
                'updated_at'     => now()
            ]);
        }
    }
}
