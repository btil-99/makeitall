<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function login(){
        return view('pages.login');
    }

    public function menu(){
        return view('pages.menu');
    }

    public function menu2(){
        return view('pages.menu2');
    }

    public function logProblem(){
        return view('pages.logProblem');
    }

    public function searchProblems(){
        return view('pages.searchProblems');
    }

    public function specialists(){
        return view('pages.specialists');
    }

    public function personnel(){
        return view('pages.personnel');
    }

    public function equip(){
        return view('pages.equip');
    }
}
