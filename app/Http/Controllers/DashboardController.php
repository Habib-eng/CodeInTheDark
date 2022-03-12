<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\code;

class DashboardController extends Controller
{
    public function show(){
        // $table = code::all();
        $table = ["info" => code::all()];
        return view ('resultat',$table);
    }
}
