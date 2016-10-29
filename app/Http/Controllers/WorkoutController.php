<?php

namespace App\Http\Controllers;

use App\User;
use App\Workout;

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
        'date' => 'required|date',
        'active_cal' => 'required|max:4',
        'avg_pace' => 'required',
        'distance' => 'required|max:10',
        'weight' => 'required|numeric|max:440',
      ]);

      if ($validator->fails()) {
        return redirect::back()
        -> withErrors($validator)
        -> withInput();
      }

      // Validator passed. Persist data to database
      $workout = new Workout($request->all());
      Auth::user()->workouts()->save($workout);

      return redirect::back()
      -> with('message', 'Workout Saved.');
    }

    public function remove($item_id) {
      if (!$item_id || $item_id == null) {
        abort(403);
      }

      // todo: do more error checking on $item_id

      // $deletedItem = new Workout()->where('id', $item_id)->delete();
      $workout = Workout::find($item_id);
      $workout->delete();

      return redirect::back()
      -> with('message', 'Workout Removed.');
    }
}
