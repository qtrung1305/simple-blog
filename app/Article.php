<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    // Cho phep nhung truong nao duoc phep cap nhat, them moi du lieu vao database
    protected $fillable = [
    	'title',
    	'content'
    ];
}
