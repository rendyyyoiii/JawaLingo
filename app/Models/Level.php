<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['nama_level'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
