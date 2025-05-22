<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    protected $fillable = ['id_user', 'id_chapter', 'nilai'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class, 'id_chapter');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
