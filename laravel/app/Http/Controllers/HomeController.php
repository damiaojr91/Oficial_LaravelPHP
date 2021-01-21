<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investimento;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function cliente()
    {
        return view("cliente");
    }

    public function administrador()
    {
        return view("administrador");
    }



}