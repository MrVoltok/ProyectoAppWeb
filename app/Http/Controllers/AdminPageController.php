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
        return view('auth.admin',['users' => User::all(),'services'=>Service::all(),'suggests'=>Suggest::all()]);
    }
}
