<?php

namespace App\Models;

use Vegacms\Cms\Models\BasicModel;

class Contact extends BasicModel
{
    protected $fillable = ['name', 'email', 'content'];
}
