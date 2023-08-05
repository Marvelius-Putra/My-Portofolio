<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollegeController extends Controller
{
    public function showAllCollege_exp(){
        $college = College::paginate(6);

        $tag = College::all();
        $getTag = $tag->sortBy('tags')->pluck('tags')->unique();
        return view('pages.college', compact('college','tag','getTag'));
    }

    public function showPhoto($id){
        College::find($id);
        $college_exp_photo = DB::table('college_details')
                            ->where('collegeExp_id','=', $id)
                            ->orderBy('collegeExp_id')
                            ->get();
        
        $college_exp_detail = DB::table('colleges')
                            ->where('id','=', $id)
                            ->get();
        return view('pages.description', compact('college_exp_photo','college_exp_detail'));
        // return view('pages.description');
    }

    public function search(Request $request){
        $keyword = $request->keyword;
        $college = College::where('tags', 'LIKE', "%$keyword%")->paginate(3)->appends(array('keyword' => $keyword));

        $tag = College::all();
        $getTag = $tag->sortBy('tags')->pluck('tags')->unique();
        return view('pages.college', compact('college','tag','getTag'));
    }

    // public function filter(Request $request)
    // {
    //     $tag = College::all();
    //     $getTag = $tag->sortBy('tags')->pluck('tags')->unique();
        
    //     // $bytag = $request->bytag;
    //     // $college = College::where('tags', 'LIKE', "%$bytag%")->paginate(3)->appends(array('bytag' => $bytag));
    //     return view('pages.college', compact('tag','getTag'));
    // }
}
