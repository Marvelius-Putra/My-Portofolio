<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $college =  [
            [
                'name' => 'Summer Class',
                'image' => 'SummerClass.png',
                'header' => 'Mentoring junior and senior high school about UI/UX with Figma',
                'tags' => 'Mentor',
                'position' =>'Teacher',
                'start_at' => Carbon::create('2022', '06', '20'),
                'end_at' => Carbon::create('2022', '07', '04'),
                'description'=> 'Summer Class is a progam that held by HIMTI organization from Bina Nusantara University. 
                                On this program, my position was as a teacher who taught senior and junior high school.
                                The topic that i taught to them was about UI/UX using figma. From how to use figma, and how to design properly',
            ],
            [
                'name' => 'Responsi HIMTI',
                'image' => 'HCI responsi UAS.jpg',
                'header' => 'Mentoring the same generation binusian to prepare for exam',
                'tags' => 'Mentor',
                'position' =>'Mentor',
                'start_at' => Carbon::create('2022', '04', '06'),
                'end_at' => Carbon::create('2022', '06', '20'),
                'description'=> 'Responsi HIMTI is a program that held by HIMTI organization from Bina Nusantara University.
                                This program is held to help college student get prepared on mid and final exam.
                                On this program, my position was as a Mentor who taught a same generation of binusian 25.
                                The topic that i taught to them was about HTML, CSS, and Javascript.'
            ],
            [
                'name' => 'School Mentoring',
                'image' => 'Aloysius Mentoring.jpg',
                'header' => 'Assist Binus Lecturer teaching at Santo Aloysius School',
                'tags' => 'Mentor',
                'position' =>'Assistant',
                'start_at' => Carbon::create('2022', '08', '11'),
                'end_at' => Carbon::create('2022', '09', '26'),
                'description'=> 'School Mentor is a program from Binus University itself to teach students at Junior and Senior High School.
                                It is held on Santo Aloysius Sultan Agung and Santo Aloysius Batununggal. 
                                In this program, my position was a lecture assistant to assist the lecture when teaching the students.
                                The material that we teach was Microsoft Excel, Technopreneurship, Design with Figma, Website, and apps.'                                 
            ],
        ];

        foreach ($college as $c) {
            DB::table('colleges')->insert([
                'name'=>$c['name'],
                'image'=>$c['image'],
                'header'=>$c['header'],
                'tags'=>$c['tags'],
                'position' =>$c['position'],
                'start_at'=>$c['start_at'],
                'end_at'=>$c['end_at'],
                'description'=>$c['description'],
            ]);
        }
    }
}
