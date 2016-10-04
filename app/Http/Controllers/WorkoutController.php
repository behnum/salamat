<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

class WorkoutController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function save(Request $request) {
      $validator = Validator::make($request->all(), [
        'date' => 'required|max:2',
      ]);

      if ($validator->fails()) {
        return redirect::back()
        -> withErrors($validator)
        -> withInput();
      }

      return 'Everything passed.';
    }
}
