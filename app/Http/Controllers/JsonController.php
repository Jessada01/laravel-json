<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\File;

class JsonController extends Controller
{
    public function index()
    {
        return view('json-from');
    }
    public function download(Request $request)
    {
        $data = $request->only('name','email','phone');
        $test['token'] = time();
        $test['data'] = json_encode($data);

        Test::insert($test);
        $fileName = $test['token'].'_datadile.json';
        File::put(public_path('/upload/json/'.$fileName),$test);

        return back()->with('success','Data has been save.');
   }

   public function showId($id)
   {
    $data = Test::find($id);
    return view('show')->with('data',json_decode($data,true));
   }

   public function showAll()
   {
       $data = Test::all();
       return view('show')->with('data',json_decode($data,true));
   }



}


