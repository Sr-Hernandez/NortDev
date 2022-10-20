<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\views;
 
use App\Http\Requests;

class IndexController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function contacto(){

    return View('contacto');

}

public function portafolio(){

    return View('portafolio');

}
public function portafoliobarber(){

    return View('portafoliobarber');

}











}
