<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::truncate();
            City::insert([
                ['name' => 'بغداد'],
                ['name' => 'كربلاء'],
                ['name' => 'النجف'],
                ['name' => 'البصرة'],
                ['name' => 'المثنى'],
                ['name' => 'ذي قار'],
                ['name' => 'بابل'],
                ['name' => 'واسط'],
                ['name' => 'ميسان'],
                ['name' => 'صلاح الدين'],
                ['name' => 'اربيل'],
                ['name' => 'كركوك'],
                ['name' => 'سليمانية'],
                ['name' => 'دهوك'],
                ['name' => 'نينوى'],
                ['name' => 'الانبار'],
                ['name' => 'القادسية'],
                ['name' => 'ديالى'],
            ]);

        // City::truncate();
        // for ($i=1; $i <=5 ; $i++) { 
        //     City::create([
        //         'name' => 'القسم '.$i,
        //     ]);
        // }
    }
}
