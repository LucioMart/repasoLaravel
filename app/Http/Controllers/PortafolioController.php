<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PortafolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
       $portafolio = Project::latest('description')->get();

        return view('portafolio', compact('portafolio'));
    }
}
