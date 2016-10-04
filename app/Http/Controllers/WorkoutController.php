<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class WorkoutController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function save() {
      return 'Works! Saved!';
    }
}
