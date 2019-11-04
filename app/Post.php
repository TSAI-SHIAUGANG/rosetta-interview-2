<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mysql';
    protected $table = 'posts';
    protected $guarded = ['id'];

    
}
