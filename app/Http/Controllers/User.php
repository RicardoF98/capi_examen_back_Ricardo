<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function all(){
        $data = User::get();
        return response()->json($data, 200);
      }
}
