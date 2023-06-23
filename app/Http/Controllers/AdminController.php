<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
   public function calendario()
   {
       return view('admin.calendario');
   }

    public function pacientes()
    {
        return view('admin.pacientes.index');
    }

    public function pagos()
    {
        return view('admin.pagos.index');
    }

}
