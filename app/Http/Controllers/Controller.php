<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  public function homepage()
  {
    $all_berita = Berita::all();
    return view('pages.home', compact('all_berita'));
  }

  public function show($id)
  {
    $berita = Berita::find($id);
    return view('pages.home_detail', compact('berita'));
  }
}
