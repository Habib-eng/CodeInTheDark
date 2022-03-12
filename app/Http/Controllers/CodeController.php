<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\code;
use App\Models\participant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class CodeController extends Controller
{
    public function store (Request $request){
        $data  =  $request->input('code');
        $mainPath = "/home/habib/Labs/CodeInTheDark/storage/app/";
        $code = new code;
        $code->Code_Post = (string)$_COOKIE["XXXX"];
        $code->Path_File = $mainPath;
        $code->save();
        Storage::disk('local')->put("info.txt",$data);
        return view('felicitate');
    }

    public function timeover(){
        return view('timeover');
    }
}
