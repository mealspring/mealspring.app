<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Recipe;
use App\User;
use Illuminate\Http\Request;
use Auth;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        return $request->user()->recipes;

    }
}
