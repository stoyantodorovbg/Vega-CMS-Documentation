<?php

namespace App\Models;

use Vegacms\Cms\Models\BasicModel;

class RequestTrack extends BasicModel
{
    protected $fillable = ['url'];

    const UPDATED_AT = null;

    //public $timestamps = ['created_at'];
}
