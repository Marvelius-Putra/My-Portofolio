<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Work;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $work =  [
        //     [
        //         'name' => 'Summer Class',
        //         'image' => 'SummerClass.jpg',
        //         'header' => 'Ini adalah SummerClass',
        //         'type' => 'Teacher',
        //         'start_at' => Carbon::create('2022', '07', '12'),
        //         'end_at' => Carbon::create('2022', '08', '26'),
        //         'description'=> 'Help lecture teach students at Santo Aloysius School',
        //     ],            
        // ];

        // foreach ($work as $c) {
        //     DB::table('work')->insert([
        //         'name'=>$c['name'],
        //         'image'=>$c['image'],
        //         'header'=>$c['header'],
        //         'type'=>$c['type'],
        //         'start_at'=>$c['start_at'],
        //         'end_at'=>$c['end_at'],
        //         'description'=>$c['description'],
        //     ]);
        // }
    }
}
