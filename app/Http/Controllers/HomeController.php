<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\HomeModel;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(HomeModel $HomeModel)
    {
        $this->middleware('auth');
        $this->HomeModel = $HomeModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['orden']     = $this->HomeModel->ordenes();
        return view('home')->with('result',$data);
    }
}
