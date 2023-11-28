<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grade::truncate();
        Grade::insert([
            ['grade' => 100,'student_id' => 1 , 'subject_id' => 1 ,'stage_id' => 4 , 'exam_type_id' => 1], 
            ['grade' => 90,'student_id' => 1 , 'subject_id' => 2 ,'stage_id' => 4 , 'exam_type_id' => 1],  
            ['grade' => 80,'student_id' => 1 , 'subject_id' => 3 ,'stage_id' => 4 , 'exam_type_id' => 1],  
            ['grade' => 70,'student_id' => 1 , 'subject_id' => 4 ,'stage_id' => 4 , 'exam_type_id' => 1],  
            ['grade' => 60,'student_id' => 1 , 'subject_id' => 5 ,'stage_id' => 4 , 'exam_type_id' => 1],  
            ['grade' => 90,'student_id' => 2 , 'subject_id' => 1 ,'stage_id' => 3 , 'exam_type_id' => 1],  
            ['grade' => 80,'student_id' => 2 , 'subject_id' => 2 ,'stage_id' => 3 , 'exam_type_id' => 1],  
            ['grade' => 70,'student_id' => 2 , 'subject_id' => 3 ,'stage_id' => 3 , 'exam_type_id' => 1],  
            ['grade' => 60,'student_id' => 2 , 'subject_id' => 4 ,'stage_id' => 3 , 'exam_type_id' => 1],  
            ['grade' => 50,'student_id' => 2 , 'subject_id' => 5 ,'stage_id' => 3 , 'exam_type_id' => 1],  
        ]);
    }
}
