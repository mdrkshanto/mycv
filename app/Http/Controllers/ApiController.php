<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserBasic;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function createUserBasic(){
        $userBasic = User::all();
        return response()->json(["userBasic" => $userBasic],200);
    }
    public function userBasic(){
        $userBasic = UserBasic::with("user","sml")->get();
        return response()->json(["userBasic" => $userBasic],200);
    }
}
