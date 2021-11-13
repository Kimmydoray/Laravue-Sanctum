<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secret;
use Auth;
class SecretController extends Controller
{
    
    public function index(Request $request)
    {
        if(!$request->user()) {
            return response()->json(['error' => 'User does not exist']);
        }
        return $request->user()->secrets;
    }
}
