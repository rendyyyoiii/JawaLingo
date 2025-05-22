<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'level_id', 'pertanyaan', 'opsiA', 'opsiB', 'opsiC', 'opsiD', 'jawabanBenar'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}