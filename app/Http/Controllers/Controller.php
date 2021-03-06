<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $variavel = "home page do sistema de gestao para grupo de investimento";
        
        return view('welcome',['title'=>$variavel]);
    }

    public function cadastro()
    {
        echo'tela de cadastro';
    }

    public function telalogin()
    {
        return view('user.login');
    }
}
