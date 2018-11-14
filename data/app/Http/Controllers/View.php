<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Singer as Singer;

class View extends Controller
{
  public function accueil()
  {
    $concerts = Singer::all();

    return view('accueil', [
      "concerts" => $concerts,
    ]);

  }

  public function deux()
  {
      return view('page-deux');
  }

}
