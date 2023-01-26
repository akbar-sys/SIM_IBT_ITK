<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    public $timestamps = false;
    protected $table = 'organisasi';
    protected $guarded = ['id'];

    // use softDeletes;
    // protected $hidden;
}