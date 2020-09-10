<?php

namespace App\Models;

use Vegacms\Cms\Models\BasicModel;

class Article extends BasicModel
{
    protected $fillable = ['title', 'sub_title', 'content', 'status'];
}
