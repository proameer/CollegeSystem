<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stage;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stage::truncate();
        Stage::insert([
            ['name' => 'المرحلة الاولى'],
            ['name' => 'المرحلة الثانية'],
            ['name' => 'المرحلة الثالثة'],
            ['name' => 'المرحلة الرابعة'],
        ]);
    }
}
