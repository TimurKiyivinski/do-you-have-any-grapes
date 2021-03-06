<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $data['title'] = "SportChamp User Profile";
        $data['icon'] = "fa-user";

        // Define sections
        $sections = [];
        $sections[] = "Orders";
        $sections[] = "Settings";
        $data['sections'] = $sections;

        return view('profile', $data);
    }
}
