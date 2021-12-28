<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['liks', 'views', 'article_id'];

    public $timestamps = false;

    // отношеня не указаны тк мы достаём ствтистику из статьи а не наоборот
}
