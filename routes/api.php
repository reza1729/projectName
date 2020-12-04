<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Model\person;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\authkey;


Route::get('person',function()
{
    $person=DB::select('select * from people');
    return response()->json($person,200);
})->middleware(authkey::class);

