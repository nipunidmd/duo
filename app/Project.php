<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
  use SoftDeletes;

  protected $guarded = ['id'];

  public function projectImages()
  {
    return $this->hasMany('App\ProjectImage', 'project_id', 'id');
  }

}
