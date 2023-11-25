<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [''];
    protected $primaryKey = 'idDirection';
}
