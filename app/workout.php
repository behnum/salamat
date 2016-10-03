<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id', 'date', 'active_cal', 'avg_pace', 'distance', 'weight'
  ];

  public function user()
  {
    return $this->belongsTo('App\User', 'user_id');
  }
}
