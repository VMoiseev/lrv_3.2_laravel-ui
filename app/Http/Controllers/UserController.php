<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('info.index', [
            'user' => $user
        ]);
    }
}
