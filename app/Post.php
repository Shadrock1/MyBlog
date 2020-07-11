<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Post extends Model
{

    protected $fillable = ['name', 'post'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
