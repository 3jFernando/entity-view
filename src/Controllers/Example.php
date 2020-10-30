<?php

namespace fernando\entityview\Controllers;

use App\Http\Controllers\Controller;

class Example extends Controller {

  public function index($message = "Predefinido")
  {
    return view("entityview::index", compact('message'));
  }

}
