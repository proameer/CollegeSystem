<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExamType;

class ExamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExamType::truncate();
        ExamType::insert([
            ['name' => 'كوز'],
            ['name' => 'يومي'],
            ['name' => 'شهري'],
            ['name' => 'نصف فصلي'],
            ['name' => 'نهائي'],
        ]);
    }
}
