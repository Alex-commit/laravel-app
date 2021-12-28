<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    // создаем массив fillable который показывает какие поля будут доступны при массовом заполнении
    protected $fillable = ['title', 'body', 'img', 'slug'];

    //поля недоступные для массового заполнения - сдесь конкретно ничего.
    //protected $guarded = [];

    // отношение один ко многим
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    //отношение к статистике один к одному
    public function state(){
        return $this->hasOne(State::class);
    }

    // отношение многие ко многим
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
