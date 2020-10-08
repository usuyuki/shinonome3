<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Greet;

class GreetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Greet::create([
                'user_id'    => $i,
                'greet'       => 'テスト投稿です' . $i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
