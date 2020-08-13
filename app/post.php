<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'judul',
        'isi'
    ];

    protected $table = 'pertanyaan';
    public $timestamps = false;
}
