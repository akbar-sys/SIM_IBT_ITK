<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    public $timestamps = false;
    protected $table = 'berita';
    protected $guarded = ['id'];
}
