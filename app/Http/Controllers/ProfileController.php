<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    // Phương thức showProfile để hiển thị thông tin cá nhân
    public function showProfile(){
        $data = [
           [
            'name' => 'Nguyễn Hữu Tuấn Anh',
            'age' => 20,
            'hometown' => 'Hà Nội',
            'major' => 'Lập trình web',
            'email' => 'anhnhtph41946@fpt.edu.vn',
            'phone' => '0123456789'
           ]
        ];
        return view('profile')->with(['listProfile' => $data]);
        // return view('profile', compact('data'));
    }
}
