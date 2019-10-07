<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // protected $table = 'users'; Author 모델과 users 테이블 연결
    public $timestamps = false;
    protected $fillable = ['email', 'password'];
}
