<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function sobre()
    {
        // passa o conteúdo para o arquivo sobre.blade.php
        return view('sobre');
    }
}
