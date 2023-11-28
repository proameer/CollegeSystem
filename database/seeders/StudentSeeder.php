<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::truncate();
        Student::insert([
            ['name' => 'امير','age' =>27 , 'address' => 'حي العامل', 'phone' => '0781234567' , 'city_id' =>1 ,'stage_id' => 4], 
            ['name' => 'احمد','age' =>27 , 'address' => 'طويريج', 'phone' => '0781234567' , 'city_id' =>2 , 'stage_id' => 3], 
        ]);
    }
}
