<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\post;

class HomeController extends Controller
{
    public function index()
    {
        If(Auth::id())
        {
            $post=post::all();

            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('home.homepage', compact('post'));
            }

            else if($usertype=='admin')
            {
                return view('admin.adminhome');
            }

            else{
                return redirect()->back();
            }
        }

    }

    public function homepage()
    {
        $post = post::all();

        return view('home.homepage', compact('post'));
    }
}
