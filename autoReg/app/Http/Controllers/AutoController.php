<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Auto;
use DB;

class AutoController extends Controller
{
    public function index()
    {
        $autoList = DB::select("select * from autos order by created_at desc");

        return view('layout', ['autoList'=>$autoList]);
    }

    public function store(Request $request)
    {         
        $validatedData = $request->validate([
            'mark' => 'required',
            'model' => 'required',
            'number' => 'required',
            'color' => 'required'
        ]);
 
        $save = new Auto;
 
        $save->mark = $request->mark;
        $save->model = $request->model;
        $save->number = $request->number;
        $save->color = $request->color;

        if($request->payed == "on")
            $save->payed = true;
        else
            $save->payed = false;

        $save->comment = $request->comment;
 
        $save ->save();
 
        return response()->json(['success' => true]);
    }
}
