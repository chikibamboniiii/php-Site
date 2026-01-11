<?php

namespace App\Http\Controllers;
use App\Models\Maintext;

use Illuminate\Http\Request;

class MaintextController extends Controller
{
    public function getIndex($url=null){
            $maintext = Maintext::where('url', $url)->first();
            return view('maintext', compact('maintext'));
    }
}

