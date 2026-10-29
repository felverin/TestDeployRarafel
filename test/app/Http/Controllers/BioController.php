<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class BioController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function contact(): View
    {
        return view('contact', [
            'users' => User::query()->get(['name', 'email', 'created_at', 'updated_at']),
        ]);
    }
}
