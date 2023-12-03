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
            ['name' => 'امير','email' => 'am@gmail.com' ,'image' => '1.png' ,'gender_id' => 1 ,'birthday' =>'2000-20-10' , 'address' => 'حي العامل', 'phone' => '0781234567' , 'city_id' =>1 ,'stage_id' => 4], 
            ['name' => 'احمد','email' => 'ah@gmail.com' ,'image' => '2.png' ,'gender_id' => 1,'birthday' =>'2002-20-10' , 'address' => 'طويريج', 'phone' => '0781234567' , 'city_id' =>2 , 'stage_id' => 3], 
        ]);
    }
}
