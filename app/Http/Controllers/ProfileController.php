<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Muhammad Raffi Fitradi',
            'kelas' => 'D',
            'npm' => '2217051029'
        ];

        return view('profile', $data);
        }
}

