<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\NoSeekStream;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function SobreNos()
    {
        return view('site.sobre-nos');
    }
}
