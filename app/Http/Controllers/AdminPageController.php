<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Suggest;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view('auth.admin',['users' => User::take(5)->get(),'services'=>Service::take(5)->get(),'suggests'=>Suggest::take(5)->get()]);
    }
}
