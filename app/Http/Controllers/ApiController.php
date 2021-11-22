<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Package;

class ApiController extends Controller
{
    public function APIlist(){
        $packages= Package::all();
        return $packages;
    }
    public function APIpost(Request $req){
        $var=new Package();
        $var -> name = $req->name;
        $var -> price = $req->price;
        $var -> shortdesc = $req->shortdesc;
        $var -> desc = $req->desc;
        $var -> image = $req->image;
        $var -> agentID = $req->agentID;
        $var->save();
        return $req;
    }
}