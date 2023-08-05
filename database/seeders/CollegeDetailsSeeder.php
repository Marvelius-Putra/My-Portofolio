<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CollegeDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail =  [
            [                
                'image' => 'SummerClass.png',
                'collegeExp_id' => '1'                
            ],

            [                
                'image' => 'Game.webp',
                'collegeExp_id' => '1'                
            ],

            [                
                'image' => 'HCI responsi UAS.jpg',
                'collegeExp_id' => '2'                
            ],

            [                
                'image' => 'college.png',
                'collegeExp_id' => '2'                
            ],

            [                
                'image' => 'Aloysius Mentoring.jpg',
                'collegeExp_id' => '3'                
            ],

            [                
                'image' => 'work.png',
                'collegeExp_id' => '3'                
            ],            
        ];

        foreach ($detail as $d) {
            DB::table('college_details')->insert([                
                'image'=>$d['image'],
                'collegeExp_id' => $d['collegeExp_id'],                
            ]);
        }
    }
}
